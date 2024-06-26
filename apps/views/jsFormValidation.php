<form id="myform" action="#" method="get">
  <fieldset>

    <legend><strong>Add your comment</strong></legend>

    <p>
      <label for="author">Name <abbr title="Required">*</abbr></label>
      <input name="author" id="author" value="" required="required" aria-required="true" pattern="^([- \w\d\u00c0-\u024f]+)$" title="Your name (no special characters, diacritics are okay)" type="text" spellcheck="false" size="20" />
    </p>

    <p>
      <label for="email">Email <abbr title="Required">*</abbr></label>
      <input name="email" id="email" value="" required="required" aria-required="true" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" title="Your email address" type="email" spellcheck="false" size="30" />
    </p>

    <p>
      <label for="website">Website</label>
      <input name="website" id="website" value="" pattern="^(http[s]?:\/\/)?([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2}(\/([-~%\.\(\)\w\d]*\/*)*(#[-\w\d]+)?)?$" title="Your website address" type="url" spellcheck="false" size="30" />
    </p>

    <p>
      <label for="text">Comment <abbr title="Required">*</abbr></label>
      <textarea name="text" id="text" required="required" aria-required="true" title="Your comment" spellcheck="true" cols="40" rows="10"></textarea>

    </p>

  </fieldset>
  <fieldset>

    <button name="preview" type="submit">Preview</button>
    <button name="save" type="submit">Submit Comment</button>

  </fieldset>

</form>

<style type="text/css">
  html, body {
  margin: 0;
  padding: 0;

  background: #fff;
  color: #333;
}
body {
  padding: 15px;
  font-size: 0.735em;
}

fieldset {
  border: none;
}

input, textarea {
  border: 1px solid #333;
  padding: 3px 5px;
}
input[aria-invalid="true"], textarea[aria-invalid="true"] {
  border: 1px solid #f00;
  box-shadow: 0 0 4px 0 #f00;
}

form p label {
  display: inline-block;
  width: 7em;
}
form p label abbr {
  border: none;
  font-weight: bold;
  color: #f00;
}
</style>
<script type="text/javascript">
  //add event construct for modern browsers or IE
//which fires the callback with a pre-converted target reference
function addEvent(node, type, callback) {
  if (node.addEventListener) {
    node.addEventListener(
      type,
      function(e) {
        callback(e, e.target);
      },
      false
    );
  } else if (node.attachEvent) {
    node.attachEvent("on" + type, function(e) {
      callback(e, e.srcElement);
    });
  }
}

//identify whether a field should be validated
//ie. true if the field is neither readonly nor disabled,
//and has either "pattern", "required" or "aria-invalid"
function shouldBeValidated(field) {
  return (
    !(field.getAttribute("readonly") || field.readonly) &&
    !(field.getAttribute("disabled") || field.disabled) &&
    (field.getAttribute("pattern") || field.getAttribute("required"))
  );
}

//field testing and validation function
function instantValidation(field) {
  //if the field should be validated
  if (shouldBeValidated(field)) {
    //the field is invalid if:
    //it's required but the value is empty
    //it has a pattern but the (non-empty) value doesn't pass
    var invalid =
      (field.getAttribute("required") && !field.value) ||
      (field.getAttribute("pattern") &&
        field.value &&
        !new RegExp(field.getAttribute("pattern")).test(field.value));

    //add or remove the attribute is indicated by
    //the invalid flag and the current attribute state
    if (!invalid && field.getAttribute("aria-invalid")) {
      field.removeAttribute("aria-invalid");
    } else if (invalid && !field.getAttribute("aria-invalid")) {
      field.setAttribute("aria-invalid", "true");
    }
  }
}

//now bind a delegated change event
//== THIS FAILS IN INTERNET EXPLORER <= 8 ==//
//addEvent(document, 'change', function(e, target)
//{
//  instantValidation(target);
//});

//now bind a change event to each applicable for field
var fields = [
  document.getElementsByTagName("input"),
  document.getElementsByTagName("textarea")
];
for (var a = fields.length, i = 0; i < a; i++) {
  for (var b = fields[i].length, j = 0; j < b; j++) {
    addEvent(fields[i][j], "change", function(e, target) {
      instantValidation(target);
    });
  }
}
</script>