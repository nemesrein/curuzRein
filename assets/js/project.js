(function(){
    var model = {
        editProject: function()
        {
            var data = document.getElementById("update_project")
            var formdata = new FormData(data);
            $.ajax({
                url:'../admin/edit_project',
                method:'post',
                dataType:'text',
                data:formdata,
                processData:false,
                contentType:false,
                success:function(data)
                {
                    alert(data);
                    if(data==="data succesfully updated");
                    {
                        window.location.href = '../admin/projects';
                    }
                }
            })
        }
    }
    var controller = {
        init:function()
        {
            view.bindeEvent();
        },
        call_editProject: function(e)
        {
            e.preventDefault()
            model.editProject();
        }
    }
    var view = {
        bindeEvent:function()
        {
            $(".modify").click(view.assignValues)
            $("#update_project").on("submit",controller.call_editProject)
        },
        assignValues:function(e)
        {
            var id = $(e.target).attr("id");
            var title=$(e.target).parent().siblings(".title").text()
            var description=$(e.target).parent().siblings(".description").text()
            console.log(title)
            $(".id").val(id)
            $(".edit_title").val(title);
            $(".edit_description").val(description)
        }
    }
    controller.init();
})()