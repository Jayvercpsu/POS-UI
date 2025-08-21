   <!-- Products Section -->
   <div class="w-2/3 p-6 overflow-y-auto no-print">
     <div class="flex justify-between items-center mb-6">
       <h1 class="text-3xl font-bold text-gray-800">POS System</h1>
       <div class="relative">
         <input type="text" id="search" placeholder="Search products..."
           class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-400 focus:border-transparent">
         <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
       </div>
     </div>

     <!-- Categories Section -->
     <div class="flex space-x-4 mb-6 overflow-x-auto py-2">
       <button class="category-btn active px-4 py-2 rounded-full border transition-colors" data-category="all">
         All Items
       </button>
       <button class="category-btn px-4 py-2 rounded-full border transition-colors" data-category="main">
         Main Course
       </button>
       <button class="category-btn px-4 py-2 rounded-full border transition-colors" data-category="drinks">
         Drinks
       </button>
       <button class="category-btn px-4 py-2 rounded-full border transition-colors" data-category="desserts">
         Desserts
       </button>
     </div>

     <div class="grid grid-cols-3 gap-6" id="products">
       <!-- Product cards will be dynamically inserted here -->
     </div>
   </div>