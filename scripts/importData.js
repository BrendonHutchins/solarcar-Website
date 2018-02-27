function importData ()
{
    d3.json("./data/myData.json", function(data)
    {
        var i = 0;        
        setInterval( function() {
                if (i == (data.length - 1)) return;
                segDisplay.value(data.rpm[i].speed);
                gauge.value(data.rpm[i].speed);
                i++;
        }, 1000);
    }) 
}