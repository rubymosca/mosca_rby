
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-[#0f172a] via-[#1e293b] to-[#2b0756] font-sans antialiased">

  <div class="min-h-screen flex items-center justify-center px-4 py-12">
    <div class="w-full max-w-lg relative">
      <!-- ambient background glows -->
      <div class="absolute inset-0 -z-10 rounded-2xl overflow-hidden">
        <div class="w-full h-full bg-gradient-to-tr from-[#0b1220] via-[#26233a] to-[#2b0756] opacity-90"></div>
        <div class="absolute -left-24 -top-24 w-64 h-64 rounded-full bg-gradient-to-br from-[#60f0ff]/18 to-[#ff7ce6]/10 blur-3xl"></div>
        <div class="absolute -right-24 -bottom-24 w-72 h-72 rounded-full bg-gradient-to-br from-[#7ef5c1]/8 to-[#a78bfa]/6 blur-3xl"></div>
      </div>

      <!-- card -->
      <div class="mx-auto relative bg-white/6 border border-white/8 backdrop-blur-md p-10 rounded-3xl shadow-2xl">
        <div class="flex flex-col items-center mb-8">
          <div class="w-20 h-20 rounded-full bg-gradient-to-tr from-[#7be9ff] to-[#ff7de1] flex items-center justify-center shadow-lg mb-4">
            <div class="w-10 h-10 rounded-full bg-white/20"></div>
          </div>

          <h1 class="text-3xl font-extrabold text-white tracking-tight mb-1">Update Record</h1>
          <p class="text-sm text-white/70">Edit the user information below</p>
        </div>

        <?php if (isset($error)): ?>
          <div class="mb-4 text-sm text-red-300 bg-red-900/30 border border-red-900/20 rounded-md px-4 py-2"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form action="<?=site_url('users/update/'.$user['id'])?>" method="POST" class="space-y-5">
          <!-- First Name -->
          <div>
            <label class="block text-xs font-medium text-white/70 mb-2">First Name</label>
            <div class="flex items-center bg-white/6 rounded-full px-4 py-3 border border-white/10 focus-within:ring-2 focus-within:ring-[#7be9ff]/30 transition">
              <svg class="w-5 h-5 text-[#7be9ff] mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
              <input type="text" name="first_name" value="<?= html_escape($user['first_name'])?>" required class="w-full bg-transparent focus:outline-none text-white placeholder-white/50" />
            </div>
          </div>

          <!-- Last Name -->
          <div>
            <label class="block text-xs font-medium text-white/70 mb-2">Last Name</label>
            <div class="flex items-center bg-white/6 rounded-full px-4 py-3 border border-white/10 focus-within:ring-2 focus-within:ring-[#7be9ff]/30 transition">
              <svg class="w-5 h-5 text-[#7be9ff] mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
              <input type="text" name="last_name" value="<?= html_escape($user['last_name'])?>" required class="w-full bg-transparent focus:outline-none text-white placeholder-white/50" />
            </div>
          </div>

          <!-- Email -->
          <div>
            <label class="block text-xs font-medium text-white/70 mb-2">Email Address</label>
            <div class="flex items-center bg-white/6 rounded-full px-4 py-3 border border-white/10 focus-within:ring-2 focus-within:ring-[#ff7de1]/30 transition">
              <svg class="w-5 h-5 text-[#ff7de1] mr-3 flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M3 8l9 6 9-6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></svg>
              <input type="email" name="email" value="<?= html_escape($user['email'])?>" required class="w-full bg-transparent focus:outline-none text-white placeholder-white/50" />
            </div>
          </div>

          <!-- Button -->
          <div>
            <button type="submit" class="w-full rounded-full py-3 text-lg font-semibold text-slate-900 shadow-lg transition transform hover:scale-[1.01] bg-[linear-gradient(90deg,#7be9ff,#ff7de1)]">
              Update
            </button>
          </div>
        </form>

        <p class="mt-5 text-center text-xs text-white/50">By updating the user you agree to the site's terms.</p>
        <div class="mt-6 text-center text-xs text-white/60">Need help? Contact admin.</div>
      </div>
    </div>
  </div>

  <style>
    html { color-scheme: dark; }
    .backdrop-blur-md { backdrop-filter: blur(8px); }
  </style>

</body>
</html>
