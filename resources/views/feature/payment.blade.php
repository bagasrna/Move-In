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
    <div clas="flex flex-col">
        <div class="flex flex-row ml-[50px] cursor-pointer mt-[50px] items-center">
            <x-heroicon-o-chevron-left  class="h-[20px]"/>
            <a href="/checkout" class="text-[26px] font-bold tracking-[5px] ml-5">back</a>
        </div>
        <div class="flex ml-[50px] mt-[50px] font-semibold tracking-[5px] flex-col">
            <h1>TOTAL PAYMENT</h1>
            <span id="nilai"></span>
        </div>
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/counter.js') }}"></script>
</body>
</html>