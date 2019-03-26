$("#message").on("submit",function(e){
    var email = $("#email").val()
    var message = $("#messages").val()
    e.preventDefault();
    $.ajax({
        url:'home/save_message',
        method:'post',
        data:{email:email,
            message:message},
        dataType:'text',
        success: function(data){
            $("#email").val("")
            $("#messages").val("")
            $("#response").html(data)
            setTimeout(() => {
                $("#response").html("")
            }, 4000);
        }
    })
})
$(".skill_update").click(function(e){
    var id = $(e.target).parent().attr("id")
    var title = $(e.target).parent().siblings("#title").text()
    var description = $(e.target).parent().siblings("#description").text()
    var progress = $(e.target).parent().siblings("#progress").text()
    $("#skill-id").text(id)
    $(".edit_title").val(title)
    $(".edit_description").val(description)
    $(".edit_progres").val(progress)
})
$("#update_skill_modal").on("submit",function(e){
    e.preventDefault();
    var id = $("#skill-id").text()
    var title = $(".edit_title").val()
    var description = $(".edit_description").val()
    var progress = $(".edit_progres").val()
    update_skill(id,title,description,progress)
})
function update_skill(id,title,description,progress)
{
    $.ajax({
        url:'../home/edit_skill',
        method:'post',
        data:{
            edit_skill:true,
            id:id,
            title:title,
            description:description,
            progress:progress
        },
        dataType:'text',
        success:function(data){
            alert(data)
            window.location.href='';
        }
    })
}
$("#add_skill_modal").on("submit",function(e){
    e.preventDefault();
    var title = $(".title").val()
    var description = $(".description").val()
    var progress = $(".progresd").val()
    add_skill(title,description,progress)
})
function add_skill(title,description,progress)
{
    $.ajax({
        url:'../home/add_skills',
        method:'post',
        data:{
            add_skill:true,
            title:title,
            description:description,
            progress:progress
        },
        dataType:'text',
        success:function(data){
            alert(data)
            window.location.href='';
        }
    })
}
$("#login_me").on("submit",function(e){
    e.preventDefault();
    var username = $("#username").val();
    var password = $("#password").val();
    $.ajax({
        url:'../home/check_login',
        method:'post',
        data:{
            login:true,
            username:username,
            password:password
        },
        dataType:'text',
        success: function(data){
            if(data==='invalid login'){
                alert("unauthorize login");
                window.location.href='../home';
            }
            else if(data==='log in'){
                window.location.href='../admin/dashboard';
            }
        }
    })
})
$(".skill-delete").click(function(e){
    var id = $(e.target).parent().attr("id");
    if(confirm("are you sure you want to delete this?")){
        window.location.href='../admin/delete_skill/'+id;
    }
})