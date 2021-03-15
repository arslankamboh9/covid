
$.ajax({
    type: "Get",
    url: "https://api.covid19api.com/summary",
    success: function (data) {
        console.log(data);
        $("#NewConfirmed").html('New Confirmed cases <br>'+data.Global.NewConfirmed);
        $("#TotalConfirmed").html('Total Confirmed cases <br>'+data.Global.TotalConfirmed);
        $('#NewDeaths').html('New Deaths <br>'+data.Global.NewDeaths);
        $('#TotalDeaths').html('Total Deaths <br>'+data.Global.TotalDeaths);
        $('#NewRecovered').html('New Recovered <br>'+data.Global.NewRecovered);
        $('#TotalRecovered').html('Total Recovered <br>'+data.Global.TotalRecovered);

        data.Countries.forEach(function (country) {
            $('#covid > tbody').append(
                `
                        <tr>
                        <td>${country.Country}</td>
                        <td>${country.CountryCode}</td>
                        <td>${country.Slug}</td>
                        <td>${country.NewConfirmed}</td>
                        <td>${country.TotalConfirmed}</td>
                        <td>${country.NewDeaths}</td>
                        <td>${country.TotalDeaths}</td>
                        <td>${country.NewRecovered}</td>
                        <td>${country.TotalRecovered}</td>
                        <td>${country.Date}</td>
                        
                        </tr>
                        `);
                  });

              },
              error:function(error){
                console.log(error);
              }
            });
