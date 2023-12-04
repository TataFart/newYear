   <div class="w-full rounded-md flex align-center justify-center mt-10 ">
      <form class="flex rounded-[12px] flex-col w-1/2 bg bg-sky-500/50 px-[10%] py-[30px] justify-center align-center text-center shadow-lg " action="action.php" method="post">
                  <label class="py-[5px] block font-medium text-stone-50" for="name">Ваше имя</label>
                  <input class="rounded-md shadow-lg border-0 h-10" id="name" name="name" type="text" required>
                 <label class="py-[5px] block font-medium text-stone-50" for="email">Ваш е-mail</label>
                 <input class="rounded-md shadow-lg border-0 h-10" id="email" name="email" type="email" required >
                 <label class="py-[5px] block font-medium text-stone-50" for="post">Ваш пароль</label>
                 <input class="rounded-md shadow-lg border-0 h-10" id="post" name="password" type="password" required >
                 <div class="flex w-full align-center justify-center py-[20px]  "><button class="h-14 text-sky-500 font-medium hover:bg-blue-200 hover:text-white hover:uppercase  w-[50%] rounded-[15px] bg-stone-50 shadow-lg " type="submit">Отправить</button></div>
      </form>
   </div>
