
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Sign in</title>
  <link rel="stylesheet" href="<?=base_url();?>public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-[#0f172a] via-[#1e293b] to-[#2b0756] font-sans antialiased">

  <div class="min-h-screen flex items-center justify-center px-4 py-12">
    <div class="w-full max-w-xl relative">
      <!-- large soft background glow -->
      <div class="absolute inset-0 -z-10 rounded-2xl overflow-hidden">
        <div class="w-full h-full bg-gradient-to-tr from-[#0b1220] via-[#26233a] to-[#2b0756] opacity-90"></div>
        <div class="absolute -left-24 -top-24 w-64 h-64 rounded-full bg-gradient-to-br from-[#60f0ff]/20 to-[#ff7ce6]/12 blur-3xl"></div>
        <div class="absolute -right-24 -bottom-24 w-72 h-72 rounded-full bg-gradient-to-br from-[#7ef5c1]/10 to-[#a78bfa]/8 blur-3xl"></div>
      </div>

      <!-- card -->
      <div class="mx-auto relative bg-white/6 border border-white/8 backdrop-blur-md p-10 rounded-3xl shadow-2xl" style="max-width:680px;">
        <!-- header -->
        <div class="flex flex-col items-center mb-8">
          <div class="w-20 h-20 rounded-full bg-gradient-to-tr from-[#7be9ff] to-[#ff7de1] flex items-center justify-center shadow-lg mb-4">
            <div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center"></div>
          </div>

          <h1 class="text-3xl font-extrabold text-white tracking-tight mb-1">Sign in</h1>
          <p class="text-sm text-white/70">Enter your credentials to continue</p>
        </div>

        <?php if (isset($error)): ?>
          <div class="mb-4 text-sm text-red-300 bg-red-900/30 border border-red-900/20 rounded-md px-4 py-2"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <!-- form -->
        <form method="post" action="<?= site_url('login') ?>" class="space-y-5">
          <!-- username -->
          <div>
            <label class="block text-xs font-medium text-white/70 mb-2">Username or Email</label>
            <div class="flex items-center bg-white/6 rounded-full px-4 py-3 border border-white/10 focus-within:ring-2 focus-within:ring-[#7be9ff]/40 transition">
              <svg class="w-5 h-5 text-[#7be9ff] mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M16 11c1.657 0 3 1.343 3 3v2H5v-2c0-1.657 1.343-3 3-3" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
              <input type="text" id="username" name="username" required autocomplete="username" placeholder="name@example.com"
                     class="w-full bg-transparent focus:outline-none text-white placeholder-white/50"/>
            </div>
          </div>

          <!-- password -->
          <div>
            <label class="block text-xs font-medium text-white/70 mb-2">Password</label>
            <div class="relative flex items-center bg-white/6 rounded-full px-4 py-3 border border-white/10 focus-within:ring-2 focus-within:ring-[#ff7de1]/30 transition">
              <svg class="w-5 h-5 text-[#ff7de1] mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="3" y="11" width="18" height="11" rx="2" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
              <input type="password" id="password" name="password" required autocomplete="current-password" placeholder="••••••••"
                     class="w-full bg-transparent focus:outline-none text-white placeholder-white/50 pr-12"/>
              <button type="button" onclick="togglePassword()" aria-label="Toggle password" class="absolute right-4 text-white/60 hover:text-white">
                <span id="eyeIcon">👁️</span>
              </button>
            </div>
          </div>

          <!-- controls -->
          <div class="flex items-center justify-between">
            <label class="flex items-center gap-3 text-white/80">
              <input type="checkbox" name="remember" class="w-4 h-4 rounded bg-white/6 border-white/10 focus:ring-[#7be9ff]"/>
              <span class="text-sm">Remember me</span>
            </label>

            <a href="<?= site_url('register') ?>" class="text-sm font-medium text-[#7be9ff] hover:underline">Register</a>
          </div>

          <!-- submit -->
          <div>
            <button type="submit" class="w-full rounded-full py-3 text-lg font-semibold text-slate-900 shadow-lg transition transform hover:scale-[1.01] bg-[linear-gradient(90deg,#7be9ff,#ff7de1)]">
              Sign in
            </button>
          </div>
        </form>

        <p class="mt-5 text-center text-xs text-white/50">By signing in you agree to the site's terms.</p>

        <!-- small footer -->
        <div class="mt-6 text-center text-xs text-white/60">Need help? Contact admin.</div>
      </div>
    </div>
  </div>

  <style>
    html { color-scheme: dark; }
    /* subtle rounded card inner border */
    .backdrop-blur-md { backdrop-filter: blur(8px); }
  </style>

  <script>
    function togglePassword(){
      const p = document.getElementById('password');
      const icon = document.getElementById('eyeIcon');
      if (p.type === 'password') { p.type = 'text'; icon.textContent = '🙈'; }
      else { p.type = 'password'; icon.textContent = '👁️'; }
    }
  </script>
</body>
</html>
