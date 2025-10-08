
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Register</title>
  <link rel="stylesheet" href="<?=base_url();?>public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-[#0f172a] via-[#1e293b] to-[#2b0756] font-sans antialiased">

  <div class="min-h-screen flex items-center justify-center px-4 py-12">
    <div class="w-full max-w-xl relative">
      <!-- background glows -->
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
            <div class="w-10 h-10 rounded-full bg-white/20"></div>
          </div>

          <h1 class="text-3xl font-extrabold text-white tracking-tight mb-1">Create account</h1>
          <p class="text-sm text-white/70">Register a new user to access the system</p>
        </div>

        <?php if (isset($error)): ?>
          <div class="mb-4 text-sm text-red-300 bg-red-900/30 border border-red-900/20 rounded-md px-4 py-2"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="post" action="<?= site_url('register') ?>" class="space-y-5">
          <!-- Username -->
          <div>
            <label class="block text-xs font-medium text-white/70 mb-2">Username</label>
            <div class="flex items-center bg-white/6 rounded-full px-4 py-3 border border-white/10 focus-within:ring-2 focus-within:ring-[#7be9ff]/30 transition">
              <svg class="w-5 h-5 text-[#7be9ff] mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 11a4 4 0 100-8 4 4 0 000 8z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
              <input type="text" id="username" name="username" required placeholder="choose a username" class="w-full bg-transparent focus:outline-none text-white placeholder-white/50"/>
            </div>
          </div>

          <!-- Email -->
          <div>
            <label class="block text-xs font-medium text-white/70 mb-2">Email</label>
            <div class="flex items-center bg-white/6 rounded-full px-4 py-3 border border-white/10 focus-within:ring-2 focus-within:ring-[#7be9ff]/30 transition">
              <svg class="w-5 h-5 text-[#7be9ff] mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M3 8l9 6 9-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
              <input type="email" id="email" name="email" required placeholder="you@example.com" class="w-full bg-transparent focus:outline-none text-white placeholder-white/50"/>
            </div>
          </div>

          <!-- Password -->
          <div>
            <label class="block text-xs font-medium text-white/70 mb-2">Password</label>
            <div class="relative flex items-center bg-white/6 rounded-full px-4 py-3 border border-white/10 focus-within:ring-2 focus-within:ring-[#ff7de1]/30 transition">
              <svg class="w-5 h-5 text-[#ff7de1] mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="3" y="11" width="18" height="11" rx="2" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
              <input type="password" id="password" name="password" required placeholder="Create a password" class="w-full bg-transparent focus:outline-none text-white placeholder-white/50 pr-12"/>
              <button type="button" onclick="togglePassword()" aria-label="Toggle password" class="absolute right-4 text-white/60 hover:text-white">
                <span id="eyeIcon">👁️</span>
              </button>
            </div>
          </div>

          <!-- Role -->
          <div>
            <label class="block text-xs font-medium text-white/70 mb-2">Role</label>
            <div class="bg-white/6 rounded-full px-4 py-2 border border-white/10">
              <select id="role" name="role" class="w-full bg-transparent text-white focus:outline-none">
                <option value="user" class="bg-[#0f172a] text-white">User</option>
                <option value="admin" class="bg-[#0f172a] text-white">Admin</option>
              </select>
            </div>
          </div>

          <!-- Submit -->
          <div>
            <button type="submit" class="w-full rounded-full py-3 text-lg font-semibold text-slate-900 shadow-lg transition transform hover:scale-[1.01] bg-[linear-gradient(90deg,#7be9ff,#ff7de1)]">
              Create account
            </button>
          </div>
        </form>

        <p class="mt-5 text-center text-xs text-white/50">By registering you agree to the site's terms.</p>

        <div class="mt-6 text-center text-xs text-white/60">Already have an account? <a href="<?= site_url('login') ?>" class="text-[#7be9ff] font-medium hover:underline">Sign in</a></div>
      </div>
    </div>
  </div>

  <style>
    html { color-scheme: dark; }
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
