$(document).ready(function() {

        $("#nationalIssues").click(function() {
          //$( ".issueLink" ).remove();
          ajaxGetPopularIssues("national");
          //changeBoolean = 1;
          //resetPopular();
          $("#seeAllIssues").addClass("btn-primary");
        });

        $("#stateIssues").click(function() {
          $( ".issueLink" ).remove();
          ajaxGetPopularIssues("state");
          //changeBoolean = 1;
          //resetPopular();
          $("#seeAllIssues").addClass("btn-success");
        });

        $("#localIssues").click(function() {
          //$( ".issueLink" ).remove();
          ajaxGetPopularIssues("local");
          //changeBoolean = 1;
          //resetPopular();
          $("#seeAllIssues").addClass("btn-danger");
        });

        function ajaxGetPopularIssues(scope) {
          $.post("./scripts/php/controller.php",
          {
            getPopularIssues: "",
            scope: scope
          },
          function(data, status){
            if(status == "success") {
              var issuesArray = JSON.parse(data);
              for (var i = 0; i < 6; i++) {
                var currentNum = (i+1).toString();

                $("#popularIssues").append(
                  '<a class="issueLink"id="issueLink'+currentNum+'" style="display: inline-block; width: 280px;height: 280px;" href="http://localhost/HackArizona/issue_view.php?i='+ issuesArray[i]["issue_id"]+'">'+
                  '<div class="issue">'+
                    '<h3 id="issueTitle'+currentNum+'" style="font-size: 15pt;">'+issuesArray[i]["issue_name"]+'</h3>'+
                    '<img id="imgThumb' +currentNum+ '" src="'+ issuesArray[i]["picture"] +'" class="img-circle" alt="imgThumb'+currentNum+'" width="200" height="200">'+
                  '</div></a>');
              }
            }
          });
        }
      });