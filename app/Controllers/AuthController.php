<?php

namespace App\Controllers;
use App\Models\UserModels; 

class AuthController extends BaseController
{
    public function processLogin()
    {
        // Ambil data dari form
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('error', $validation->getErrors());
        }

        // Lakukan pengecekan login dengan model User
        $userModel = new UserModels();
        $user = $userModel->where('email', $email)->first();

        // Periksa apakah pengguna ditemukan dan password cocok
        if ($user && password_verify($password, $user['password'])) {
            // Jika login berhasil, simpan informasi pengguna ke dalam sesi
            $session = session();
            $session->set('id', $user['id']);

            // Redirect ke halaman dashboard
            return redirect()->to('/dashboard');
        } else {
            // Jika kombinasi email dan password tidak valid
            return redirect()->back()->withInput()->with('error', 'Invalid email or password');
        }
    }
    public function login()
    {
        return view('home/login');
    }
    public function processRegister()
    {
        // Ambil data dari form
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan data pengguna ke database
        $userModel = new UserModels();
        $data = [
            'username' => $username,
            'email' => $email,
            'password' => $password
        ];
        $userModel->insert($data);

        // Redirect ke halaman login setelah register berhasil
        return redirect()->to('/login')->with('success', 'Registration successful! Please log in.');
    }
    
    public function register()
    {
        return view('home/register');
    }
    public function processLogout()
    {
        // Hapus data sesi pengguna
        $session = session();
        $session->destroy();

        // Redirect ke halaman login setelah logout berhasil
        return redirect()->to('')->with('success', 'You have been logged out successfully.');
    }
}
