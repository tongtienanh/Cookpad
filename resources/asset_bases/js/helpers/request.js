var Request = {
    querySearch : '',

    getWindowLocationSerch: function()
    {
        return window.location.search;
    },

    getCurrentPathName : function()
    {
        return window.location.pathname;
    },

    removeParamFromQueryUrl : function(key, sourceURL)
    {
        if (typeof sourceURL === "undefined")
        {
            sourceURL = this.getWindowLocationSerch();
        }

        var rtn = sourceURL.split("?")[0],
            param,
            params_arr = [],
            queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";

        if (queryString !== "")
        {
            params_arr = queryString.split("&");
            for (var i = params_arr.length - 1; i >= 0; i -= 1)
            {
                param = params_arr[i].split("=")[0];
                if (param === key)
                {
                    params_arr.splice(i, 1);
                }
            }

            rtn = (params_arr.length > 0) ? rtn + "?" + params_arr.join("&") : rtn;
        }
        return rtn;
    },

    addAndUpdateParamToQueryUrl : function (query,param_key,param_value)
    {
        //tạo một biểu thức chính quy tìm kiếm với tham số param_key
        var re = new RegExp("([?&])" + param_key + "=[^&#]*", "i");
        //kiểm tra nếu tồn tại thì thay thế chuỗi mới với tham số và giá trị được truyền vào
        if (re.test(query)) {
            query = query.replace(re, '$1' + param_key + "=" + param_value);
        }else {
            //kiem tra dấu ? đã có trong chuỗi query ? . True -> "&" : False -> "?";
            var separator = /\?/.test(query) ? "&" : "?";

            query = query + separator + param_key + "=" + param_value;
        }

        return query;
    },

    setParam : function(paramKey, paramValue, searchUrl)
    {
        if (typeof searchUrl === "undefined") searchUrl  = this.getQuerySearch();

        this.querySearch = (typeof paramKey !== undefined && typeof paramValue !== undefined)
            ? this.addAndUpdateParamToQueryUrl(searchUrl, paramKey, paramValue)
            : searchUrl;
        return this;
    },

    runLocation:function()
    {
        window.location = this.getCurrentPathName() + this.getQuerySearch();
    },

    convertUrlToObject : function()
    {
        var vars = {};
        var parts = this.querySearch.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value)
        {
            vars[key] = encodeURI(value);
        });

        return vars;
    }
}

export default Request;