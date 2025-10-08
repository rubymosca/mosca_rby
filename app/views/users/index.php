<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Table</title>
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="relative min-h-screen font-sans bg-gradient-to-br from-fuchsia-900 via-blue-800 to-cyan-400 overflow-hidden">
  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Table</title>
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="relative min-h-screen font-sans bg-gradient-to-br from-[#0f172a] via-[#1e293b] to-[#2b0756] text-white">
  <!-- Hero Section with SVG Wave -->
  <div class="absolute inset-0 z-0">
    <div class="absolute inset-0 bg-gradient-to-br from-[#0f172a] via-[#1e293b] to-[#2b0756]"></div>
    <svg class="absolute bottom-0 left-0 w-full h-40" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="0.08"
        d="M0,224L48,197.3C96,171,192,117,288,117.3C384,117,480,171,576,197.3C672,224,768,224,864,197.3C960,171,1056,117,1152,117.3C1248,117,1344,171,1392,197.3L1440,224V320H0Z"></path>
    </svg>
  </div>

  <!-- Navbar -->
  <nav class="relative z-10 bg-gradient-to-br from-[#0f172a] via-[#1e293b] to-[#2b0756] shadow-lg">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <a href="#" class="text-white font-extrabold text-3xl tracking-widest flex items-center gap-3 drop-shadow-lg">
        <svg class="w-9 h-9 text-white animate-bounce" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M3 7v4a1 1 0 001 1h16a1 1 0 001-1V7M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        Students Table
      </a>
      <a href="<?=site_url('users/create')?>"
        class="inline-block bg-gradient-to-r from-[#5d2bd9] to-[#00c3ff] hover:from-[#4a00e0] hover:to-[#4facfe] text-white font-bold px-7 py-3 rounded-full shadow-xl transition duration-200 text-lg tracking-wide">
        <span class="inline-flex gap-1 items-center">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
          </svg>
          Create New User
        </span>
      </a>
      <a href="<?=site_url('login')?>"
        class="inline-block bg-gradient-to-r from-[#5d2bd9] to-[#00c3ff] hover:from-[#4a00e0] hover:to-[#4facfe] text-white font-bold px-7 py-3 rounded-full shadow-xl transition duration-200 text-lg tracking-wide">
        Logout
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="relative z-10 max-w-6xl mx-auto mt-16 px-4">
    <div
      class="backdrop-blur-2xl bg-white/10 border border-white/20 shadow-2xl rounded-3xl p-10 animate-fadeIn text-center">
      <div class="flex justify-between items-center mb-10">
        <h1 class="text-4xl font-extrabold text-[#bdb2ff] flex items-center gap-3 tracking-tight">
          <svg class="w-10 h-10 text-[#00c3ff] animate-spin-slow" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2" />
          </svg>
          Students List
        </h1>
      </div>

      <!-- Search Bar -->
      <form method="get" action="<?=site_url('users/index')?>" class="flex justify-center gap-3 mb-10">
        <input type="text" name="q" value="<?=html_escape($_GET['q'] ?? '')?>"
          placeholder="Search student..."
          class="px-5 py-3 w-2/3 md:w-1/2 lg:w-1/3 rounded-full border border-[#5d2bd9]/60 focus:outline-none focus:ring-2 focus:ring-[#8e2de2] bg-white/10 text-white placeholder-gray-300 transition">
        <button type="submit"
          class="bg-gradient-to-r from-[#5d2bd9] to-[#00c3ff] hover:from-[#4a00e0] hover:to-[#4facfe] text-white font-bold px-8 py-3 rounded-full shadow-lg transition duration-200 text-lg tracking-wide">
          Search
        </button>
      </form>

      
<!-- Glassmorphic Table -->
<div class="overflow-x-auto rounded-2xl shadow-lg backdrop-blur-lg bg-white/10 border border-white/20">
  <table class="min-w-full text-center text-sm text-white">
    <thead>
      <tr class="bg-gradient-to-r from-pink-500/30 via-purple-500/30 to-blue-500/30 text-white text-base uppercase tracking-wide">
        <th class="py-4 px-6 font-semibold">ID</th>
        <th class="py-4 px-6 font-semibold">Lastname</th>
        <th class="py-4 px-6 font-semibold">Firstname</th>
        <th class="py-4 px-6 font-semibold">Email</th>
        <?php if ($current_role === 'admin'): ?>
          <th class="py-4 px-6 font-semibold">Action</th>
        <?php endif; ?>
      </tr>
    </thead>
    <tbody class="divide-y divide-white/10">
      <?php foreach(html_escape($users) as $user): ?>
      <tr class="hover:bg-white/10 transition duration-300">
        <td class="py-3 px-4 font-semibold text-pink-300"><?=($user['id']);?></td>
        <td class="py-3 px-4 text-gray-100"><?=($user['last_name']);?></td>
        <td class="py-3 px-4 text-gray-100"><?=($user['first_name']);?></td>
        <td class="py-3 px-4">
          <span class="inline-block bg-white/20 text-pink-100 text-sm font-medium px-3 py-1 rounded-full border border-white/20 shadow-sm">
            <?=($user['email']);?>
          </span>
        </td>
        <?php if ($current_role === 'admin'): ?>
        <td class="py-3 px-4">
          <div class="flex justify-center gap-3">
            <a href="<?=site_url('users/update/'.$user['id']);?>" class="px-3 py-1 rounded-full text-sm font-semibold bg-gradient-to-r from-cyan-400/40 to-blue-500/40 hover:from-cyan-400/60 hover:to-blue-500/60 text-white shadow-md transition">
              Update
            </a>
            <a href="<?=site_url('users/delete/'.$user['id']);?>" onclick="return confirm('Are you sure you want to delete this record?');" class="px-3 py-1 rounded-full text-sm font-semibold bg-gradient-to-r from-red-400/40 to-pink-500/40 hover:from-red-400/60 hover:to-pink-500/60 text-white shadow-md transition">
              Delete
            </a>
          </div>
        </td>
        <?php endif; ?>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>



      <!-- Pagination -->
      <div class="pagination-container mt-10 flex justify-center">
        <div
          class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-xl border border-[#5d2bd9]/30 rounded-full px-8 py-4 shadow-2xl ring-2 ring-[#5d2bd9]/40">
          <?php if (isset($page)): ?>
          <?= str_replace(
            [
              '<a ',
              '<strong class="z-10 bg-indigo-50 border-indigo-500 text-indigo-600 ">',
              '</strong>'
            ],
            [
              '<a class="px-5 py-2 rounded-full font-bold text-[#bdb2ff] border border-[#5d2bd9]/40 bg-white/10 hover:bg-gradient-to-r hover:from-[#5d2bd9]/60 hover:to-[#00c3ff]/60 hover:text-white hover:shadow-lg transition duration-200 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#8e2de2]" ',
              '<span class="px-5 py-2 rounded-full bg-gradient-to-r from-[#5d2bd9] via-[#6a11cb] to-[#2575fc] text-white font-extrabold text-lg shadow-xl ring-4 ring-[#00c3ff]/30 animate-pulse">',
              '</span>'
            ],
            $page
          ); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

