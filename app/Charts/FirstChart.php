<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class FirstChart extends BaseChart
{
    /**
     * Determines the chart name to be used on the
     * route. If null, the name will be a snake_case
     * version of the class name.
     */
    public ?string $name = 'firstchart';

    /**
     * Determines the name suffix of the chart route.
     * This will also be used to get the chart URL
     * from the blade directrive. If null, the chart
     * name will be used.
     */
    public ?string $routeName = 'firstchart';

    /**
     * Determines the prefix that will be used by the chart
     * endpoint.
     */
    public ?string $prefix = 'chartsjs';

    /**
     * Determines the middlewares that will be applied
     * to the chart endpoint.
     */
    /* public ?array $middlewares = ['auth']; */

    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels(['Janeiro', 'Fevereiro', 'Março', 'Abril'])
            ->dataset('vendas 1', [1, 2, 3, 5])
            ->dataset('vendas 2', [3, 3, 1, 6])
            ->dataset('vendas 3', [2, 2, 1, 3])
            ->dataset('vendas 4', [2, 2, 3, 1]);

    }
}
