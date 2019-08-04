function makeBarchar(id,data) {
    var chart = c3.generate({
        bindto: '#'+id,
        data: {
            columns: data,
            type: 'bar'
        },
        bar: {
            space: 0.2,
            // or
        },
        resize: true
    });
}
function makeDonutChar(id,data){
    var chart = c3.generate({
        bindto: '#'+id,
        data: {
            columns:data,

            type: 'donut',
            onclick: function(d, i) { console.log("onclick", d, i); },
            onmouseover: function(d, i) { console.log("onmouseover", d, i); },
            onmouseout: function(d, i) { console.log("onmouseout", d, i); }
        },
        donut: {
            label: {
                show: false
            },
            title: "Hiển thị theo %",
            width: 30,

        },

        legend: {
            hide: true
            //or hide: 'data1'
            //or hide: ['data1', 'data2']
        },
    });
}