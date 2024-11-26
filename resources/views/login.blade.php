<style>
    /* Container Utama */
    .login-container {
      display: flex;
      height: 100vh;
      background-color: #2c3e50;
    }
  
    /* Kolom Formulir */
    .login-form-column {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background-color: #1a233a;
      width: 50%;
      padding: 40px;
      color: #ffffff;
    }
  
    /* Form Login */
    .login-form {
      display: flex;
      flex-direction: column;
      width: 100%;
      max-width: 300px;
      text-align: center;
    }
  
    /* Logo */
    .logo img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      margin-bottom: 20px;
    }
  
    /* Judul Login */
    .login-title {
      font-size: 24px;
      font-weight: 500;
      margin-bottom: 20px;
    }
  
    /* Label Input */
    .input-field {
      background-color: #d9d9d9;
      border: none;
      border-radius: 18px;
      padding: 10px 15px;
      margin-bottom: 15px;
      font-size: 16px;
    }
  
    /* Tombol Login */
    .login-button {
      background-color: #000;
      color: #fff;
      border: none;
      border-radius: 15px;
      padding: 10px 0;
      font-size: 16px;
      cursor: pointer;
      margin-top: 10px;
    }
  
    /* Teks Signup */
    .signup-prompt {
      display: flex;
      justify-content: center;
      margin-top: 20px;
      font-size: 14px;
    }
  
    .signup-text {
      color: #cccccc;
    }
  
    .signup-link {
      color: #fff;
      font-weight: 600;
      text-decoration: none;
      margin-left: 5px;
    }
  
    /* Kolom Gambar */
    .image-column {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50%;
      background-color: #ffffff;
    }
  
    .login-image {
      max-width: 300px;
      width: 100%;
      height: auto;
    }
  </style>
  
  <section class="login-container">
    <!-- Kolom Formulir Login -->
    <div class="login-form-column">
      <div class="login-form">
        <div class="logo" role="img" aria-label="Company logo">
          <img src="https://static.vecteezy.com/system/resources/previews/009/734/564/original/default-avatar-profile-icon-of-social-media-user-vector.jpg" alt="User Icon">
        </div>
        <h1 class="login-title">LOGIN</h1>
        <input type="text" class="input-field" placeholder="Username / Email" aria-label="Username or Email">
        <input type="password" class="input-field" placeholder="Password" aria-label="Password">
        <button type="submit" class="login-button">LOGIN</button>
        <div class="signup-prompt">
          <span class="signup-text">Tidak memiliki akun?</span>
          <!-- Link menuju halaman registrasi -->
          <a href="{{ route('registrasi') }}" class="signup-link">Buat Akun?</a>
        </div>
      </div>
    </div>
  
    <!-- Kolom Gambar -->
    <div class="image-column">
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/85f0ec719ad745dba880a26966ce0abe27384b752ed577d87ecb6c02a7427af2?placeholderIfAbsent=true&apiKey=a351eff581dd49bc8b0df35674194c82"
           alt="SIKEPIK Logo" class="login-image">
    </div>
  </section>
  