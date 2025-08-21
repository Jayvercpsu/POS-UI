   <!-- Cart Section -->
   <div class="w-1/3 bg-white shadow-lg p-6 flex flex-col">
       <div class="flex-1 overflow-y-auto mb-4">
           <h2 class="text-2xl font-bold mb-4 text-gray-800">Current Order</h2>
           <div id="cart-items" class="space-y-4">
               <!-- Cart items will be dynamically inserted here -->
           </div>
       </div>

       <div class="border-t pt-4">
           <div class="flex justify-between text-lg mb-2">
               <span>Subtotal:</span>
               <span id="subtotal">$0.00</span>
           </div>
           <div class="flex justify-between text-lg mb-2">
               <span>Tax (10%):</span>
               <span id="tax">$0.00</span>
           </div>
           <div class="flex justify-between text-xl font-bold">
               <span>Total:</span>
               <span id="total">$0.00</span>
           </div>

           <div class="grid grid-cols-2 gap-4 mt-6">
               <button onclick="clearCart()" class="bg-red-500 text-white py-3 px-4 rounded-lg hover:bg-red-600 transition-colors">
                   <i class="fas fa-trash mr-2"></i>Clear
               </button>
               <button onclick="checkout()" class="bg-green-500 text-white py-3 px-4 rounded-lg hover:bg-green-600 transition-colors">
                   <i class="fas fa-check mr-2"></i>Checkout
               </button>
           </div>
       </div>
   </div>