<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.profile', compact('user'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('profile.edit_profile', compact('user'));
    }

    public function update(Request $request)
{
    $user = Auth::user();

    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'alamat' => 'nullable|string|max:255',
        'telepon' => 'nullable|string|max:20',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'foto_ktp' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $statusPerluUpdate = false;

    // Deteksi perubahan data
    if ($request->alamat !== $user->alamat || $request->telepon !== $user->telepon) {
        $statusPerluUpdate = true;
    }

    // Cek dan upload foto profil jika ada
    if ($request->hasFile('foto')) {
        if ($user->foto && Storage::disk('public')->exists($user->foto)) {
            Storage::disk('public')->delete($user->foto);
        }
        $pathFoto = $request->file('foto')->store('profile', 'public');
        $user->foto = $pathFoto;

        $statusPerluUpdate = true;
    }

    // Cek dan upload foto KTP jika ada
    if ($request->hasFile('foto_ktp')) {
        if ($user->foto_ktp && Storage::disk('public')->exists($user->foto_ktp)) {
            Storage::disk('public')->delete($user->foto_ktp);
        }
        $pathKtp = $request->file('foto_ktp')->store('ktp', 'public');
        $user->foto_ktp = $pathKtp;

        $statusPerluUpdate = true;
    }

    // Update data teks
    $user->name = $request->name;
    $user->alamat = $request->alamat;
    $user->telepon = $request->telepon;
    $user->email = $request->email;

    // Set status verifikasi jika ada perubahan signifikan
    if ($statusPerluUpdate) {
        $user->status_verifikasi = 'menunggu';
    }

    $user->save();

    return redirect()->route('profile')->with('success', 'Profile berhasil diperbarui.');
}


    public function gantiPassword()
    {
        $user = Auth::user();
        return view('profile.ganti_password', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'min:8', 'confirmed'],
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password lama tidak sesuai.']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('ganti_password')->with('success', 'Password berhasil diperbarui.');
    }
}
