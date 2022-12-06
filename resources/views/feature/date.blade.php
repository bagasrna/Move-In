<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Move-In</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-col cursor-pointer mx-20 mt-[100px]">
        <div class="flex flex-row items-center">
            <x-heroicon-o-chevron-left  class="h-[20px]"/>
            <a href="" class="text-[26px] font-bold tracking-[5px] ml-5">back</a>
        </div>
        <form action="">
            @csrf
            <div class="flex flex-row justify-between mt-[50px]">
                <div class="flex flex-col">
                    <h1 class="text-[16px] font-bold">Select Date</h1>
                    <input type="date" name="checkout" class="border-2 shadow-lg w-[500px] p-10 mt-[50px] rounded-xl">
                </div>
                <div class="flex-col flex">
                    <div class="bg-[#D6E4E5] p-5 flex justify-between w-[400px] rounded-xl mt-[50px]">
                        <h1>Quantity : </h1>
                        <div>
                            <button type="button" class="btn decrease border-2 px-[5px] text-[12px] font-bold rounded-sm border-black mr-10">-</button>
                            <span id="counter">0</span>
                            <button type="button" class="btn increase border-2 ml-10 px-[5px] text-[12px] font-bold rounded-sm border-black ">+</button>
                        </div>
                    </div>
                    <div class="bg-[#D6E4E5] font-bold p-5 flex justify-between w-[400px] rounded-xl mt-[20px]">
                        <h1>Total Payment</h1>
                        <h1 id="total">Rp 0</h1>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-[100px]">
                <a href="/checkout" class="p-3 text-[16px] justify-center flex w-[150px] text-sm font-semibold text-white bg-[#4FA095] rounded-lg">BOOK NOW</a>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/counter.js') }}"></script>
</body>
</html>