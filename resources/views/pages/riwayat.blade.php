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
        <h1 class="font-bold text-[20px]">Selesai</h1>
    </div>
        @foreach ($histories as $history)
            <div" class="flex flex-row w-[600px]">
                <div class="px-7 h-[350px] text-white p-5 items-center mx-5 mt-[50px] w-full justify-center flex font-semibold text-[20px] flex-col rounded-2xl bg-[#F6F6C9]">
                    <h1 class="w-[300px]  bg-[#9F9F9F] rounded-2xl py-2 px-5">Tanggal pesan : {{$history->date}}</h1>
                    <h3 class="mt-[50px] bg-[#9F9F9F] rounded-2xl py-2 px-5 w-[300px]">Quantitiy : {{$history->quantity}}</h3>
                    <h3 class="mt-[50px] bg-[#9F9F9F] rounded-2xl px-5 py-2 w-[300px]">Total : {{$history->total}}</h3>
                </div>
            </a>
        @endforeach
</body>
</html>