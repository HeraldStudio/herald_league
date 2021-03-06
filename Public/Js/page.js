$(document).ready(function() {
    $('#preactivity').click(function() {
        var currentpage = $("#currentpage").val();
        var leagueid = $('#leagueidpage').val();
        if (currentpage != 0) {
            $("#currentpage").val(Number(currentpage) - 1);
        };
        $.ajax({
            url: '/herald_league/index.php/League/Index/getEachPageActivity',
            type: 'post',
            dataType: 'json',
            data: {page: currentpage, leagueid:leagueid},
            success: function(data) {
                if (data) {
                    var n;
                    var l = data.length;
                    for (i = 0; i < l; i++) {
                        n = data[i];
                        if (n.post_add) {
                            $items = '<div class="thumbnail"><a href="#" class="thumb"><img src="/herald_league/Uploads/ActivityPost/m_' + n.post_add + '" alt="alt" /></a><div class="heading center_lz" style="font-size:20px;margin-top:20px;"><a data-toggle="modal" href="/herald_league/index.php/Activity/Index/activity/activityid/'+n.id+'" class="activityname" id="' + n.id + '">' + n.name + '</a></div><div class="word_wrap"><br/><p>主办方：<a href="#">' + n.league_name + '</a><a href="#" title="关注此社团"><img src="/herald_league/Public/Images/attention-small.png"/></a></p><p>时间：' + n.start_time + '</p><p>地点：' + n.place + '</p><br/></div></div>';
                        } else {
                            $items = '<div class="thumbnail"><div class="heading center_lz" style="font-size:20px;margin-top:20px;"><a href="/herald_league/index.php/Activity/Index/activity/activityid/'+n.id+'" class="activityname" id="' + n.id + '">' + n.name + '</a></div><div class="word_wrap"><br/><p>主办方：<a href="#">' + n.league_name + '</a></p><p>时间：' + n.start_time + '</p><p>地点：' + n.place + '</p><br/></div></div>';
                        };
                        $('.activity-page li:nth-child('+(i+1)+')').html($items);    

                    }

                }

            }
        });
    });

    $('#nextactivity').click(function() {
        var currentpage = $("#currentpage").val();
        var maxpage = $('#maxpage').val();
        var leagueid = $('#leagueidpage').val();
        if (Number(currentpage) < Number(maxpage)) {
            $('#currentpage').val(Number(currentpage) + 1);
        }
        $.ajax({
            url: '/herald_league/index.php/League/Index/getEachPageActivity',
            type: 'post',
            dataType: 'json',
            data: {page: currentpage,leagueid:leagueid},
            success: function(data) {
                if (data) {
                    var n;
                    var l = data.length;
                    for (i = 0; i < l; i++) {
                        n = data[i];
                        if (n.post_add) {
                           $items = '<div class="thumbnail"><a href="#" class="thumb"><img src="/herald_league/Uploads/ActivityPost/m_' + n.post_add + '" alt="alt" /></a><div class="heading center_lz" style="font-size:20px;margin-top:20px;"><a data-toggle="modal" href="/herald_league/index.php/Activity/Index/activity/activityid/'+n.id+'" class="activityname" id="' + n.id + '">' + n.name + '</a></div><div class="word_wrap"><br/><p>主办方：<a href="#">' + n.league_name + '</a></p><p>时间：' + n.start_time + '</p><p>地点：' + n.place + '</p><br/></div></div>';
                        } else {
                            $items = '<div class="thumbnail"><div class="heading center_lz" style="font-size:20px;margin-top:20px;"><a href="/herald_league/index.php/Activity/Index/activity/activityid/'+n.id+'" class="activityname" id="' + n.id + '">' + n.name + '</a></div><div class="word_wrap"><br/><p>主办方：<a href="#">' + n.league_name + '</a></p><p>时间：' + n.start_time + '</p><p>地点：' + n.place + '</p><br/></div></div>';
                        }
                        $('.activity-page li:nth-child('+(i+1)+')').html($items);
                    }
                }
            }
        })
    });
    $('#prephotopage').click(function() {
        var currentphotopage = $("#currentphotopage").val();
        if (currentphotopage != 0) {
            $("#currentphotopage").val(Number(currentphotopage) - 1);
        };
        $.ajax({
            url: '/herald_league/index.php/League/Index/getEachPagePhoto',
            type: 'post',
            dataType: 'json',
            data: {
                page: currentphotopage
            },
            success: function(data) {
                if (data) {
                    var n;
                    var l = data.length;
                    for (i = 0; i < l; i++) {
                        n = data[i];
                        $items = '<a data-toggle="modal" href="#myModal"><img alt="140x140" src="__Public__/Images/06.jpg" class="img-rounded" /><p>'+n.name+'</p></a>';
                        $('.photodiv div:nth-child('+(i+1)+')').html($items); 

                    }

                }

            }
        });
    });

    $('#nextphotopage').click(function() {
        var currentphotopage = $("#currentphotopage").val();
        var maxphotopage = $('#maxphotopage').val();
        if (currentphotopage < maxphotopage) {
            $('#currentphotopage').val(Number(currentphotopage) + 1);
        }
        $.ajax({
            url: '/herald_league/index.php/League/Index/getEachPagePhoto',
            type: 'post',
            dataType: 'json',
            data: {
                page: currentphotopage
            },
            success: function(data) {
                if (data) {
                    var n;
                    var l = data.length;
                    for (i = 0; i < l; i++) {
                        n = data[i];
                        $items = '<a data-toggle="modal" href="#myModal"><img alt="140x140" src="__Public__/Images/06.jpg" class="img-rounded" /><p>'+n.name+'</p></a>';
                       
                        $('.photodiv div:nth-child('+(i+1)+')').html($items);
                    }


                }

            }
            
        })
    });
});