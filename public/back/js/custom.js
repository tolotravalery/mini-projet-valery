function toJSONBody(elements) {
    var res = {};
    for (var i = 0; i < elements.length; ++i) {
        var name = elements[i].name;
        if (name) res[name] = elements[i].value;
    }
    return JSON.stringify(res);
}

let ajouterFormulaire = function (url, formId) {
    $('#error').html("");
    $('#success').html("");
    const spinner = $(".btn-formulaire >.spinner-border").css('display', 'inline-block');
    $.ajax(url, {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: "POST",
        contentType: "application/json",
        data: toJSONBody($(formId).serializeArray()),
        success: function (data) {
            spinner.css('display', 'none');
            if(data.errors){
                jQuery.each(data.errors, function(key, value){
                    $('#error').append(value+'<br/>');
                });
            }
            if(data.success){
                const res = $("#"+data.success);
                const response = res.attr("data-response");
                if (response === "OK") {
                    $('#list-formulaires').html(data);
                    const redirect = res.attr("data-url");
                    if (redirect)
                        window.location = redirect;
                    else
                        document.getElementById(formId.substr(1)).reset();
                }
            }
        },
    });
};

let ajouterPage = function (url, formId) {
    $('#error').html("");
    $('#success').html("");
    const spinner = $(".btn-page >.spinner-border").css('display', 'inline-block');
    $.ajax(url, {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: "POST",
        contentType: "application/json",
        data: toJSONBody($(formId).serializeArray()),
        success: function (data) {
            spinner.css('display', 'none');
            if(data.errors){
                jQuery.each(data.errors, function(key, value){
                    $('#error').append(value+'<br/>');
                });
            }
            if(data.success){
                const res = $("#"+data.success);
                const response = res.attr("data-response");
                if (response === "OK") {
                    $('#list-pages').html(data);
                    const redirect = res.attr("data-url");
                    if (redirect)
                        window.location = redirect;
                    else
                        document.getElementById(formId.substr(1)).reset();
                }
            }
        },
    });
};

let ajouterQuestion = function (url, formId) {
    console.log(toJSONBody($(formId).serializeArray()))
    $('#error').html("");
    $('#success').html("");
    const spinner = $(".btn-question >.spinner-border").css('display', 'inline-block');
    $.ajax(url, {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: "POST",
        contentType: "application/json",
        data: toJSONBody($(formId).serializeArray()),
        success: function (data) {
            spinner.css('display', 'none');
            if(data.errors){
                jQuery.each(data.errors, function(key, value){
                    $('#error').append(value+'<br/>');
                });
            }
            if(data.success){
                const res = $("#"+data.success);
                const response = res.attr("data-response");
                if (response === "OK") {
                    $('#list-questions').html(data);
                    const redirect = res.attr("data-url");
                    if (redirect)
                        window.location = redirect;
                    else
                        document.getElementById(formId.substr(1)).reset();
                }
            }
        },
    });
};

let ajouterReponse = function (url, formId) {
    $('#error').html("");
    $('#success').html("");
    const spinner = $(".btn-reponse >.spinner-border").css('display', 'inline-block');
    $.ajax(url, {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: "POST",
        contentType: "application/json",
        data: toJSONBody($(formId).serializeArray()),
        success: function (data) {
            spinner.css('display', 'none');
            if(data.errors){
                jQuery.each(data.errors, function(key, value){
                    $('#error').append(value+'<br/>');
                });
            }
            if(data.success){
                const res = $("#"+data.success);
                const response = res.attr("data-response");
                if (response === "OK") {
                    $('#list-reponses').html(data);
                    const redirect = res.attr("data-url");
                    if (redirect)
                        window.location = redirect;
                    else
                        document.getElementById(formId.substr(1)).reset();
                }
            }
        },
    });
};
