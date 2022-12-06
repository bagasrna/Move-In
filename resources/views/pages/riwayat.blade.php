<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Move-In</title>
</head>
<body>
    @include('layout.headerLogin')
    <div class=" ml-[60px] flex-col">
        <h1 class="mt-[120px] text-[24px] font-bold">Pesanan</h1>
    </div>
    <div class="flex flex-row mt-[50px] justify-around p-5 bg-[#D6E4E5]">
        <h1>Sedang berjalan</h1>
        <h1>Selesai</h1>
    </div>
    <div class="bg-[#2A3342]">
        <div class="w-full cursor-pointer px-[140px] flex-row">
        @foreach ($histories as $history)
            <a href="/book/{{$book->id}}" class="w-full p-5 mt-[20px] mb-[50px]">
                <div class="px-7 h-[400px] py-[50px] flex font-semibold text-[25px] flex-col rounded-2xl bg-[#D9D9D9]">
                    <h1 class="text-[#2a33429c] w-[500px]">{{$histry->date}}</h1>
                    <h3 class="text-[#2a33429c] mt-[50px] w-[300px]">By : <span class="underline">{{$history->quantity}}</span></h3>
                </div>
            </a>
        @endforeach
    </div>
</body>
</html>