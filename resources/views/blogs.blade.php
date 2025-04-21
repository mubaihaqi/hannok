<x-layout>
    {{-- <article class="flex bg-white transition hover:shadow-xl dark:bg-gray-900 dark:shadow-gray-800/25">
        <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
            <time datetime="2022-10-10"
                class="flex items-center justify-between gap-4 text-xs font-bold text-gray-900 uppercase dark:text-white">
                <span>2022</span>
                <span class="w-px flex-1 bg-gray-900/10 dark:bg-white/10"></span>
                <span>Oct 10</span>
            </time>
        </div>

        <div class="hidden sm:block sm:basis-56">
            <img alt=""
                src="https://images.unsplash.com/photo-1609557927087-f9cf8e88de18?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80"
                class="aspect-square h-full w-full object-cover" />
        </div>

        <div class="flex flex-1 flex-col justify-between">
            <div class="border-s border-gray-900/10 p-4 sm:!border-l-transparent sm:p-6 dark:border-white/10">
                <a href="#">
                    <h3 class="font-bold text-gray-900 uppercase dark:text-white">
                        Finding the right guitar for your style - 5 tips
                    </h3>
                </a>

                <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700 dark:text-gray-200">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
                    pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis
                    quidem, mollitia itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius
                    atque dignissimos. Molestias explicabo corporis voluptatem?
                </p>
            </div>

            <div class="sm:flex sm:items-end sm:justify-end">
                <a href="#"
                    class="block bg-yellow-400 px-5 py-3 text-center text-xs font-bold text-gray-900 uppercase transition hover:bg-yellow-500">
                    Read Blog
                </a>
            </div>
        </div>
    </article> --}}


    <table id="search-table">
        <thead>
            <tr>
                <th>
                    <span class="flex items-center">
                        Company Name
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        Ticker
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        Stock Price
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        Market Capitalization
                    </span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple Inc.</td>
                <td>AAPL</td>
                <td>$192.58</td>
                <td>$3.04T</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Microsoft Corporation</td>
                <td>MSFT</td>
                <td>$340.54</td>
                <td>$2.56T</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Alphabet Inc.</td>
                <td>GOOGL</td>
                <td>$134.12</td>
                <td>$1.72T</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Amazon.com Inc.</td>
                <td>AMZN</td>
                <td>$138.01</td>
                <td>$1.42T</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">NVIDIA Corporation</td>
                <td>NVDA</td>
                <td>$466.19</td>
                <td>$1.16T</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Tesla Inc.</td>
                <td>TSLA</td>
                <td>$255.98</td>
                <td>$811.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Meta Platforms Inc.</td>
                <td>META</td>
                <td>$311.71</td>
                <td>$816.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Berkshire Hathaway Inc.</td>
                <td>BRK.B</td>
                <td>$354.08</td>
                <td>$783.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">TSMC</td>
                <td>TSM</td>
                <td>$103.51</td>
                <td>$538.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">UnitedHealth Group Incorporated
                </td>
                <td>UNH</td>
                <td>$501.96</td>
                <td>$466.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Johnson & Johnson</td>
                <td>JNJ</td>
                <td>$172.85</td>
                <td>$452.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">JPMorgan Chase & Co.</td>
                <td>JPM</td>
                <td>$150.23</td>
                <td>$431.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Visa Inc.</td>
                <td>V</td>
                <td>$246.39</td>
                <td>$519.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Eli Lilly and Company</td>
                <td>LLY</td>
                <td>$582.97</td>
                <td>$552.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Walmart Inc.</td>
                <td>WMT</td>
                <td>$159.67</td>
                <td>$429.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Samsung Electronics Co., Ltd.
                </td>
                <td>005930.KS</td>
                <td>$70.22</td>
                <td>$429.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Procter & Gamble Co.</td>
                <td>PG</td>
                <td>$156.47</td>
                <td>$366.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Nestlé S.A.</td>
                <td>NESN.SW</td>
                <td>$120.51</td>
                <td>$338.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Roche Holding AG</td>
                <td>ROG.SW</td>
                <td>$296.00</td>
                <td>$317.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Chevron Corporation</td>
                <td>CVX</td>
                <td>$160.92</td>
                <td>$310.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">LVMH Moët Hennessy Louis Vuitton
                </td>
                <td>MC.PA</td>
                <td>$956.60</td>
                <td>$478.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Pfizer Inc.</td>
                <td>PFE</td>
                <td>$35.95</td>
                <td>$200.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Novo Nordisk A/S</td>
                <td>NVO</td>
                <td>$189.15</td>
                <td>$443.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">PepsiCo, Inc.</td>
                <td>PEP</td>
                <td>$182.56</td>
                <td>$311.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">ASML Holding N.V.</td>
                <td>ASML</td>
                <td>$665.72</td>
                <td>$273.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">The Coca-Cola Company</td>
                <td>KO</td>
                <td>$61.37</td>
                <td>$265.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Oracle Corporation</td>
                <td>ORCL</td>
                <td>$118.36</td>
                <td>$319.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Merck & Co., Inc.</td>
                <td>MRK</td>
                <td>$109.12</td>
                <td>$276.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Broadcom Inc.</td>
                <td>AVGO</td>
                <td>$861.80</td>
                <td>$356.00B</td>
            </tr>
            <tr>
                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">Mastercard Incorporated</td>
                <td>MA</td>
                <td>$421.44</td>
                <td>$396.00B</td>
            </tr>
        </tbody>
    </table>


    <script>
        if (document.getElementById("search-table") && typeof simpleDatatables.DataTable !== 'undefined') {
            const dataTable = new simpleDatatables.DataTable("#search-table", {
                searchable: true,
                sortable: false
            });
        }
    </script>
</x-layout>
