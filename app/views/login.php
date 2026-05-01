<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NOME PROJETO — Login</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      min-height: 100vh;
      background: #EFF4FB;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
      padding: 2rem;
    }

    .wrap {
      display: flex;
      width: 100%;
      max-width: 860px;
      min-height: 520px;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 20px 60px rgba(13, 71, 161, 0.15);
    }

    .left {
      flex: 1;
      background: linear-gradient(160deg, #1565C0 0%, #0D47A1 40%, #082f6e 100%);
      padding: 2.5rem 2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      position: relative;
      overflow: hidden;
    }

    .left::before {
      content: '';
      position: absolute;
      bottom: -40px; left: -40px;
      width: 280px; height: 280px;
      background: rgba(100, 180, 255, 0.12);
      border-radius: 50%;
    }

    .left::after {
      content: '';
      position: absolute;
      top: -60px; right: -60px;
      width: 220px; height: 220px;
      background: rgba(100, 180, 255, 0.08);
      border-radius: 50%;
    }

    .brand-name {
      font-size: 30px;
      font-weight: 700;
      color: #fff;
      letter-spacing: 1px;
      text-align: center;
      margin-top: 1rem;
    }

    .brand-name span { color: #64B5F6; }

    .brand-sub {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.65);
      text-align: center;
      margin-top: 8px;
      line-height: 1.6;
    }

    .features {
      display: flex;
      gap: 1rem;
      padding-top: 2.5rem;
      position: relative;
      z-index: 1;
    }

    .feature {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      flex: 1;
    }

    .feature-icon {
      width: 40px; height: 40px;
      background: rgba(255, 255, 255, 0.12);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .feature-text {
      font-size: 11px;
      color: rgba(255, 255, 255, 0.6);
      text-align: center;
      line-height: 1.4;
    }

    .right {
      flex: 1.1;
      background: #ffffff;
      padding: 3rem 2.5rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .form-title {
      font-size: 24px;
      font-weight: 700;
      color: #0D2B5E;
      text-align: center;
      margin-bottom: 8px;
    }

    .form-sub {
      font-size: 13px;
      color: #8a96a8;
      text-align: center;
      margin-bottom: 2rem;
      line-height: 1.6;
    }

    .field-label {
      font-size: 13px;
      font-weight: 500;
      color: #374151;
      margin-bottom: 6px;
      display: block;
    }

    .field-wrap {
      position: relative;
      margin-bottom: 1.25rem;
    }

    .field-icon {
      position: absolute;
      left: 14px;
      top: 50%;
      transform: translateY(-50%);
      color: #9CA3AF;
      display: flex;
    }

    .field-input {
      width: 100%;
      border: 1px solid #E5E7EB;
      border-radius: 10px;
      padding: 12px 14px 12px 42px;
      font-size: 14px;
      color: #111827;
      outline: none;
      background: #fff;
      transition: border-color 0.2s, box-shadow 0.2s;
    }

    .field-input::placeholder { color: #9CA3AF; }

    .field-input:focus {
      border-color: #1565C0;
      box-shadow: 0 0 0 3px rgba(21, 101, 192, 0.1);
    }

    .eye-btn {
      position: absolute;
      right: 14px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      cursor: pointer;
      color: #9CA3AF;
      padding: 0;
      display: flex;
    }

    .forgot {
      display: block;
      text-align: right;
      font-size: 12px;
      color: #1565C0;
      text-decoration: none;
      margin-top: -0.75rem;
      margin-bottom: 1.5rem;
    }

    .forgot:hover { color: #0D47A1; }

    .btn-login {
      width: 100%;
      background: #1565C0;
      color: #fff;
      font-size: 15px;
      font-weight: 600;
      border: none;
      border-radius: 10px;
      padding: 14px;
      cursor: pointer;
      transition: background 0.2s, transform 0.1s;
      margin-bottom: 1.25rem;
    }

    .btn-login:hover { background: #0D47A1; }
    .btn-login:active { transform: scale(0.99); }

    .divider {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 1.25rem;
    }

    .div-line { flex: 1; height: 1px; background: #E5E7EB; }
    .div-text { font-size: 12px; color: #9CA3AF; }

    .register-line {
      text-align: center;
      font-size: 13px;
      color: #6B7280;
    }

    .register-line a {
      color: #1565C0;
      font-weight: 500;
      text-decoration: none;
    }

    .register-line a:hover { color: #0D47A1; }

    @media (max-width: 600px) {
      .left { display: none; }
      .right { padding: 2rem 1.5rem; }
    }
  </style>
</head>
<body>

  <div class="wrap">
    <div class="left">
      <div style="text-align:center; position:relative; z-index:1;">
        <!--COLOCAR LOGO --> 
        <p class="brand-name"><span>NOME DO PROJETO </span></p>
        <p class="brand-sub">Monitoramento inteligente da<br>qualidade do ar</p>
      </div>

      <div class="features">
        <div class="feature">
          <div class="feature-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.85)" stroke-width="2" stroke-linecap="round">
              <path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 14 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"/>
            </svg>
          </div>
          <p class="feature-text">Qualidade do ar<br>em tempo real</p>
        </div>
        <div class="feature">
          <div class="feature-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.85)" stroke-width="2" stroke-linecap="round">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <p class="feature-text">Segurança e<br>confiabilidade</p>
        </div>
        <div class="feature">
          <div class="feature-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.85)" stroke-width="2" stroke-linecap="round">
              <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
            </svg>
          </div>
          <p class="feature-text">Dados precisos<br>para decisões</p>
        </div>
      </div>
    </div>

    <div class="right">
      <p class="form-sub">Faça login para acessar sua conta e acompanhar<br>a qualidade do ar em tempo real.</p>

      <label class="field-label" for="usuario">Email ou usuário</label>
      <div class="field-wrap">
        <span class="field-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
            <circle cx="12" cy="7" r="4"/>
          </svg>
        </span>
        <input class="field-input" type="text" id="usuario" placeholder="Digite seu email ou usuário"/>
      </div>

      <label class="field-label" for="senha">Senha</label>
      <div class="field-wrap">
        <span class="field-icon">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
          </svg>
        </span>
        <input class="field-input" type="password" id="senha" placeholder="Digite sua senha"/>
        <button class="eye-btn" onclick="toggleSenha()" type="button">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
            <circle cx="12" cy="12" r="3"/>
          </svg>
        </button>
      </div>

      <a href="#" class="forgot">Esqueci minha senha</a>

      <button class="btn-login">Entrar</button>

      <div class="divider">
        <div class="div-line"></div>
        <span class="div-text">ou</span>
        <div class="div-line"></div>
      </div>

      <p class="register-line">Não tem uma conta? <a href="#">Quero me cadastrar</a></p>
    </div>
  </div>

  <script>
    function toggleSenha() {
      const input = document.getElementById('senha');
      input.type = input.type === 'password' ? 'text' : 'password';
    }
  </script>

</body>
</html>