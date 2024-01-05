<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            -webkit-print-color-adjust: exact;
        }
    </style>


</head>

<body class="antialiased">
    <div class="p-12">
        <div class="flex flex-col justify-center items-center max-w-[900px]">
            <img src="https://as-images.imgix.net/65b9d6f8f850d00f23bcbd2b4d50fa45-Capture.JPG"
                class="h-[600px] w-full" />
            <div class="flex flex-col gap-4 bg-gray-800 w-full p-2">
                <p class="text-yellow-300 font-extra-bold text-2xl">SELF CONTAINED, TOWN CENTRE OFFICES WITH ON
                    SITE PARKING. TO BE REFURBISHED.</p>

                <p class="text-white">TO LET - 2,015 TO 7,402 SQ FT (187.20 TO 687.67 SQ M)</p>
            </div>
        </div>
    </div>
    @pageBreak
    <div class="p-12">
        <div class="flex justify-between">
            <div class="flex flex-col gap-1">
                <p class="text-yellow-400 font-bold">GULLIVER HOUSE</p>
                <p class="text-xs">MADERIA WALK | WINSOR | SL4 1EU</p>
            </div>
            <div>
                <img src="https://as-images.imgix.net/53b962aa646dfd53aeafd14f09ebd2fb-HW-New-Blue-Logo-1.png?w=100"/>
            </div>
        </div>
        <div class="flex mt-4 gap-8">
            <div class="bg-slate-700 h-[400px] w-[250px] rounded-md">
                <div class="p-5 ">
                    <p class="text-white">KEY BENEFITS</p>
                    <div class="text-white mt-5">
                        <li>Benefit 1</li>
                        <li>Benefit 2</li>
                        <li>Benefit 3</li>
                        <li>Benefit 4</li>

                    </div>
                </div>
            </div>

            <div class="border border-1 h-[400px] w-[250px] rounded-md">
                <div class="p-5 ">
                    <p class="">Location</p>
                    <div class="mt-5">
                        <p class="text-xs">Situated in Windsor’s core business district, near The Long
                            Walk and adjacent to Bachelors' Acre, Gulliver House is
                            close to Park Street and the High Street in an attractive
                            town centre position. Windsor benefits
                            from excellent road rail and air communications added to
                            by the M4 smart motorway, as well as the fast Crossrail
                            connection from Windsor Central Station. 27 minute fast
                            travel time to Paddington via Slough.
                            Both Windsor Central and Riverside Stations are within an
                            easy walk as are the town’s vibrant shopping restaurant
                            hotel and leisure facilities.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
