<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class GraficoAgendamento
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $data_agendamento = \App\Models\Agendamento::all();
        $dates = array_unique($data_agendamento->pluck('data_agendamento')->toArray());
        sort($dates);
        $AgendaData = [];

        foreach ($dates as $item) {
            array_push($AgendaData, 0);
        }

        foreach ($data_agendamento as $item) {
            for ($i = 0; $i < sizeof($dates); $i++) {
                if($dates[$i] == $item->data_agendamento) {
                    $AgendaData[$i] += 1;
                    break;
                }
            }
        }

        for ($i = 0; $i < sizeof($dates); $i++) {
            $date=date_create($dates[$i]);
            
        }
        
        return $this->chart->lineChart()
            ->setTitle("Agendamentos no período")
            ->addData('Agendamentos', $AgendaData)
            ->setXAxis($dates);
    }
}


