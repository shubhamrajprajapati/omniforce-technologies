// ApexCharts options and config
import ApexCharts from "apexcharts";

const pieChart = {
    options: {
        series: [32.8, 26.8, 20.4, 20],
        colors: ["#008000", "#FF0000", "#8B8000", "#FF00FF"],
        title: {
            text: "Tap on the area to for more details",
            align: "center",
            style: {
                fontFamily: "inherit",
                fontWeight: 600,
                color: "grey",
            },
        },
        chart: {
            height: 420,
            width: "100%",
            type: "pie",
        },
        stroke: {
            colors: ["white"],
            lineCap: "",
        },
        plotOptions: {
            pie: {
                labels: {
                    show: true,
                },
                size: "100%",
                dataLabels: {
                    offset: -25,
                },
            },
        },
        labels: ["Listening", "Configuring", "Launching", "Support"],
        dataLabels: {
            enabled: true,
            style: {
                fontFamily: "inherit, sans-serif",
                colors: ["white"],
            },
            formatter(val, opts) {
                const name = opts.w.globals.labels[opts.seriesIndex];
                const num = opts.seriesIndex + 1;
                return [
                    num,
                    name,
                    //val.toFixed(1) + "%"
                ];
            },
        },
        legend: {
            show: true,
            showForSingleSeries: false,
            inverseOrder: false,
            position: "bottom",
            horizontalAlign: "center",
            formatter: function (legendName) {
                return `<span class='text-slate-200 bg-white/5 ring-0 px-2 py-[1px] rounded'>${legendName}</span>`;
            },
            position: "bottom",
            fontFamily: "inherit, sans-serif",
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return value + "%";
                },
            },
        },
        xaxis: {
            labels: {
                formatter: function (value) {
                    return value + "%";
                },
            },
            axisTicks: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
        },
        tooltip: {
            style: {
                fontFamily: "inherit, sans-serif",
            },
            custom: function ({ seriesIndex, w }) {
                const label = w.globals.labels[seriesIndex];
                const outerHTML = document.querySelectorAll(
                    `[seriesnamediv=${label}]`
                )[0].outerHTML;
                const labelColor = w.globals.colors[seriesIndex];
                return `<div class="max-w-xs overflow-visible whitespace-normal bg-white dark:bg-black -m-1" style="color:${labelColor};">${outerHTML}</div>`;
            },
        },
    },

    _init() {
        if (
            document.getElementById("pie-chart") &&
            typeof ApexCharts !== "undefined"
        ) {
            const chart = new ApexCharts(
                document.getElementById("pie-chart"),
                this.options
            );
            chart.render();
        }
    },
};

export default pieChart;
