<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="<?=base_url();?>public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .password-toggle {
      cursor: pointer;
      user-select: none;
    }
    .error {
      color: red;
    }
    .glass {
      background: rgba(255,255,255,0.7);
      box-shadow: 0 10px 40px 0 rgba(120,0,255,0.15), 0 2px 4px 0 rgba(0,0,0,0.10);
      backdrop-filter: blur(12px);
      border-radius: 1.5rem;
      border: 1px solid rgba(255,255,255,0.25);
    }
  </style>
</head>

<body class="relative min-h-screen font-sans bg-gradient-to-br from-fuchsia-900/80 via-blue-800/70 to-cyan-400/60 flex items-center justify-center overflow-hidden">

  <!-- Hero Section with SVG Wave -->
  <div class="absolute inset-0 z-0">
    <div class="absolute inset-0 bg-gradient-to-br from-fuchsia-900/80 via-blue-800/70 to-cyan-400/60"></div>
    <svg class="absolute bottom-0 left-0 w-full h-40" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="0.7" d="M0,224L48,197.3C96,171,192,117,288,117.3C384,117,480,171,576,197.3C672,224,768,224,864,197.3C960,171,1056,117,1152,117.3C1248,117,1344,171,1392,197.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </div>

  <!-- Main Content -->
  <div class="glass relative z-10 border-white/60 shadow-2xl p-10 w-full max-w-md animate-fadeIn">

    <!-- Header -->
    <div class="mb-8 flex flex-col items-center">
      <div class="bg-gradient-to-tr from-fuchsia-400 to-cyan-400 rounded-full p-3 shadow-lg mb-3">
        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 00-8 0v2M12 11a4 4 0 100-8 4 4 0 000 8z" />
        </svg>
      </div>
      <h1 class="text-3xl font-extrabold text-fuchsia-800 tracking-tight drop-shadow">Welcome Back</h1>
      <p class="text-gray-700 mt-1 text-sm">Sign in to your account</p>
    </div>

    <?php if (isset($error)): ?>
      <p class="error text-center mb-4"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>

    <form method="post" action="<?= site_url('login') ?>" class="space-y-6">
      <div>
        <label for="username" class="block text-fuchsia-800 font-semibold mb-2">Username or Email</label>
        <input type="text" id="username" name="username" required
               class="w-full px-4 py-3 border border-fuchsia-300 rounded-full focus:outline-none focus:ring-2 focus:ring-fuchsia-400 bg-white/80 shadow-sm transition" />
      </div>

      <div>
        <label for="password" class="block text-fuchsia-800 font-semibold mb-2">Password</label>
        <div class="relative">
          <input type="password" id="password" name="password" required
                 class="w-full px-4 py-3 border border-fuchsia-300 rounded-full focus:outline-none focus:ring-2 focus:ring-fuchsia-400 bg-white/80 shadow-sm transition" />
          <span class="password-toggle absolute right-4 top-3 text-fuchsia-500" onclick="togglePassword()">👁️</span>
        </div>
      </div>

      <button type="submit" class="w-full bg-gradient-to-r from-cyan-400 to-fuchsia-500 hover:from-cyan-500 hover:to-fuchsia-600 text-white font-bold py-3 rounded-full shadow-lg transition duration-200 text-lg">
        Login
      </button>
    </form>

    <p class="text-center mt-6 text-gray-700">Don't have an account?
      <a href="<?= site_url('register') ?>" class="text-fuchsia-700 hover:text-cyan-600 font-semibold underline underline-offset-2">Register here</a>
    </p>
  </div>

  <script>
    function togglePassword() {
      var pwd = document.getElementById('password');
      if (pwd.type === 'password') {
        pwd.type = 'text';
      } else {
        pwd.type = 'password';
      }
    }
  </script>
</body>
</html>