<?php

$title = "菜单 - 后台界面";

?>
<div id="msg" class="fixed block mx-auto left-0 right-0 z-40 w-full sm:mt-2 sm:w-1/6"></div>

<h1 class="text-3xl font-bold my-4">菜单</h1>

<!------------ Debut Flowbite Drawer ------------>
<!-- form-category-add -->
<div id="form-category-add" class="fixed mt-16 top-0 right-0 w-96 z-30 h-screen p-4 overflow-y-auto transition-transform translate-x-full border-l-2 bg-white w-80" tabindex="-1" aria-labelledby="drawer-right-label">
   <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-900">添加新的类别</h5>
   <button type="button" data-drawer-hide="form-category-add" aria-controls="form-category-add" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
      </svg>
      <span class="sr-only">Close menu</span>
   </button>

   <form class="mb-6" action="./addCategory" method="POST">
      <input type="hidden" name="order" value="<?php echo count($data['category']) + 1 ?>">
      <div class="mb-6">
         <label for="name" class="block mb-2 text-sm font-medium text-gray-900">类别名称</label>
         <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="请填写类别名称" required>
      </div>
      <div class="mb-6">
         <label for="description" class="block mb-2 text-sm font-medium text-gray-900">类别介绍</label>
         <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500" placeholder="请填写类别介绍"></textarea>
      </div>
      <button type="submit" class="text-white justify-center flex items-center bg-gray-800 hover:bg-gray-900 w-full focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none">
         添加
      </button>
   </form>
</div>

<!-- form-product-add -->
<div id="form-product-add" class="fixed mt-16 top-0 right-0 w-96 z-30 h-screen p-4 overflow-y-auto transition-transform translate-x-full border-l-2 bg-white w-80" tabindex="-1" aria-labelledby="drawer-right-label">
   <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-900">添加新的产品</h5>
   <button type="button" data-drawer-hide="form-product-add" aria-controls="form-product-add" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
      </svg>
      <span class="sr-only">Close menu</span>
   </button>

   <form class="mb-6" action="./addProduct" method="POST" enctype="multipart/form-data">
      <input type="hidden" id="id_category" name="id_category" value="">
      <input type="hidden" id="order_product" name="order_product" value="">
      <div class="mb-6">
         <label class="block mb-2 text-sm font-medium text-gray-900" for="photo">图片上传</label>
         <input name="photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="photo" type="file">
      </div>
      <div class="mb-6">
         <label for="name" class="block mb-2 text-sm font-medium text-gray-900">产品名称</label>
         <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="请填写类别名称" required>
      </div>
      <div class="mb-6">
         <label for="price" class="block mb-2 text-sm font-medium text-gray-900">产品价格</label>
         <input type="number" id="price" name="price" step="0.01" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="请填写价格" required>
      </div>
      <div class="mb-6">
         <label for="category" class="block mb-2 text-sm font-medium text-gray-900">选择产品类别</label>
         <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" required>
            <?php
            foreach ($data['category'] as $key => $category) {
            ?><option value="<?php echo $category->id_category ?>"><?php echo $category->name_category ?></option>
            <?php
            }
            ?>
         </select>
      </div>
      <button type="submit" class="text-white justify-center flex items-center bg-gray-800 hover:bg-gray-900 w-full focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none">
         添加产品
      </button>
   </form>
</div>

<!-- form-category-edit -->
<div id="form-category-edit" class="fixed mt-16 top-0 right-0 w-96 z-30 h-screen p-4 overflow-y-auto transition-transform translate-x-full border-l-2 bg-white w-80" tabindex="-1" aria-labelledby="drawer-right-label">
   <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-900">修改类别</h5>
   <button type="button" data-drawer-hide="form-category-edit" aria-controls="form-category-edit" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
      </svg>
      <span class="sr-only">Close menu</span>
   </button>

   <form class="mb-6" action="" method="POST">
      <input type="hidden" id="form_category_edit_id" name="id">
      <input type="hidden" id="form_category_edit_order" name="order">
      <div class="mb-6">
         <label for="name" class="block mb-2 text-sm font-medium text-gray-900">类别名称</label>
         <input type="text" id="form_category_edit_name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="请填写类别名称" required>
      </div>
      <div class="mb-6">
         <label for="description" class="block mb-2 text-sm font-medium text-gray-900">类别介绍</label>
         <textarea id="form_category_edit_description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500" placeholder="请填写类别介绍"></textarea>
      </div>
      <button type="submit" name="editCategory" class="text-white justify-center flex items-center bg-gray-800 hover:bg-gray-900 w-full focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none">
         保存
      </button>
      <div id="deleteCategoryEl">
         <div class="flex space-x-2">
            <button type='button' onclick="deleteCategoryConfirm()" class='text-white justify-center flex items-center bg-red-700 hover:bg-red-600 w-full focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none'>
               删除
            </button>
         </div>
      </div>

   </form>
</div>

<!-- form-product-edit -->
<div id="form-product-edit" class="fixed mt-16 top-0 right-0 w-96 z-30 h-screen p-4 overflow-y-auto transition-transform translate-x-full border-l-2 bg-white w-80" tabindex="-1" aria-labelledby="drawer-right-label">
   <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-900">修改产品</h5>
   <button type="button" data-drawer-hide="form-product-edit" aria-controls="form-product-edit" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
      </svg>
      <span class="sr-only">Close menu</span>
   </button>

   <form class="mb-6" action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" id="form_product_edit_id" name="id_product" value="">
      <div class="mb-6">
         <label class="block mb-2 text-sm font-medium text-gray-900" for="photo">图片上传</label>
         <input name="photo" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="form_product_edit_photo" type="file">
      </div>
      <div class="mb-6">
         <label for="name" class="block mb-2 text-sm font-medium text-gray-900">产品名称</label>
         <input type="text" id="form_product_edit_name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="请填写类别名称" required>
      </div>
      <div class="mb-6">
         <label for="price" class="block mb-2 text-sm font-medium text-gray-900">产品价格</label>
         <input type="number" step="0.01" id="form_product_edit_price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="请填写价格" required>
      </div>
      <div class="mb-6">
         <label for="category" class="block mb-2 text-sm font-medium text-gray-900">选择产品类别</label>
         <select disabled id="form_product_edit_category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" required>
            <?php
            foreach ($data['category'] as $key => $category) {
            ?><option value="<?php echo $category->id_category ?>"><?php echo $category->name_category ?></option>
            <?php
            }
            ?>
         </select>
      </div>
      <button type="submit" name="editProduct" class="text-white justify-center flex items-center bg-gray-800 hover:bg-gray-900 w-full focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none">
         保存
      </button>
      <div id="deleteProductEl">
         <div class="flex space-x-2">
            <button type='button' onclick="deleteProductConfirm()" class='text-white justify-center flex items-center bg-red-700 hover:bg-red-600 w-full focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none'>
               删除
            </button>
         </div>
      </div>
   </form>
</div>

<!------------ Fin Flowbite Drawer ------------>

<button id="btn_category_add" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 m-4 focus:outline-none" type="button" aria-controls="form-category-add">
   添加新的类别
</button>

<ul id="list_category" data-accordion="open" class="relative divide-y divide-gray-200 bg-white border-t-2 m-2 shadow-xl">
   <?php
   foreach ($data['category'] as $key_category => $category) {
   ?>
      <li id="li-category-<?php echo $category->id_category ?>" class="categorylist pb-2">
         <div id="li-category-heading-<?php echo $category->id_category ?>" aria-expanded="true" data-accordion-target="#list-product-<?php echo $category->id_category ?>" class="relative flex items-center space-x-4 py-2 bg-white cursor-pointer">
            <div onclick="event.stopPropagation()" class="handle flex justify-center items-center text-gray-600 w-8 h-8 text-xs cursor-move">
               <i class="fa-solid fa-equals"></i>
            </div>
            <div>
               <h4 id="name_category" class="text-sm font-medium text-gray-900"><?php echo $category->name_category ?></h4>
               <?php
               if (!empty($category->description_category)) {
               ?>
                  <p id="description_category" class="text-xs"><?php echo $category->description_category ?></p>
               <?php
               }
               ?>
            </div>
            <button class="btn_edit_category" type="button" class="cursor-default" onclick="edit_category()" aria-controls="form-category-edit" data-drawer-hide="form-category-add">
               <i class="fa-solid fa-gear"></i>
            </button>
            <div data-accordion-icon class="absolute text-gray-400 end-2 text-sm">
               <i class="fa-solid fa-chevron-down"></i>
            </div>
         </div>
         <ul id="list-product-<?php echo $category->id_category ?>" class="list_product relative mx-4 divide-y divide-gray-200 bg-white border-t mt-2">
            <?php
            foreach ($data['product'][$key_category] as $key => $product) {
               if (!empty($product)) {
            ?>
                  <li id="li_product_<?php echo $product->id_product ?>" onclick="edit_product()" class="pl-4 py-2 productList border-collapse border-t border-b relative flex items-center space-x-4 cursor-pointer hover:bg-gray-100">
                     <div class="handle flex justify-center items-center text-gray-600 w-8 h-8 text-xs cursor-move">
                        <i class="fa-solid fa-equals"></i>
                     </div>
                     <div class="w-12 h-12 bg-indigo-300">
                        <?php
                        if (!empty($product->photo_product)) {
                        ?>
                           <img class="object-cover w-12 h-12" src="<?php echo $product->photo_product ?>">
                        <?php
                        }
                        ?>
                     </div>
                     <h4 class="productName text-sm font-medium text-gray-900"><?php echo $product->name_product ?></h4>
                     <p class="productPrice text-xs"><?php echo number_format($product->price_product, 2, '.', '') . "€" ?></p>
                  </li>
            <?php
               }
            }

            ?>
            <div class="mt-2">
               <div class="flex items-center justify-center h-10 rounded bg-gray-50 mt-2 mx-10 cursor-pointer" aria-controls="form-product-add" onclick="add_product()">
                  <p class="text-2xl text-gray-400">
                     <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                     </svg>
                  </p>
               </div>
            </div>
         </ul>
      </li>
   <?php
   }
   ?>
</ul>


<button id="save_order" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 m-4 focus:outline-none">
   保存
</button>