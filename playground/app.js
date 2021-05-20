function AjaxClass()
{
  this.get = function(url, handleData)
  {
      return $.ajax({
      url: url,
      dataType : "JSON",
      type : "GET",
      success : function(response)
      {
        handleData(response);
      },
      error: function(xhr, resp, text)
      {
        handleData(text);
      }
    });
  }

  this.post = function(url, formData)
  {
    $.ajax({
      url: url,
      type : "POST",
      dataType : "JSON",
      data : formData,
      success : function(response)
      {
        return response;
      },
      error: function(xhr, resp, text)
      {
        return xhr;
      }
    });
    return false;
  }
}
