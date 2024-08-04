function number_format(number, decimals, decPoint, thousandsSep) { // eslint-disable-line camelcase
    //  discuss at: http://locutus.io/php/number_format/
    // original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
    // improved by: Kevin van Zonneveld (http://kvz.io)
    // improved by: davook
    // improved by: Brett Zamir (http://brett-zamir.me)
    // improved by: Brett Zamir (http://brett-zamir.me)
    // improved by: Theriault (https://github.com/Theriault)
    // improved by: Kevin van Zonneveld (http://kvz.io)
    // bugfixed by: Michael White (http://getsprink.com)
    // bugfixed by: Benjamin Lupton
    // bugfixed by: Allan Jensen (http://www.winternet.no)
    // bugfixed by: Howard Yeend
    // bugfixed by: Diogo Resende
    // bugfixed by: Rival
    // bugfixed by: Brett Zamir (http://brett-zamir.me)
    //  revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
    //  revised by: Luke Smith (http://lucassmith.name)
    //    input by: Kheang Hok Chin (http://www.distantia.ca/)
    //    input by: Jay Klehr
    //    input by: Amir Habibi (http://www.residence-mixte.com/)
    //    input by: Amirouche
    //   example 1: number_format(1234.56)
    //   returns 1: '1,235'
    //   example 2: number_format(1234.56, 2, ',', ' ')
    //   returns 2: '1 234,56'
    //   example 3: number_format(1234.5678, 2, '.', '')
    //   returns 3: '1234.57'
    //   example 4: number_format(67, 2, ',', '.')
    //   returns 4: '67,00'
    //   example 5: number_format(1000)
    //   returns 5: '1,000'
    //   example 6: number_format(67.311, 2)
    //   returns 6: '67.31'
    //   example 7: number_format(1000.55, 1)
    //   returns 7: '1,000.6'
    //   example 8: number_format(67000, 5, ',', '.')
    //   returns 8: '67.000,00000'
    //   example 9: number_format(0.9, 0)
    //   returns 9: '1'
    //  example 10: number_format('1.20', 2)
    //  returns 10: '1.20'
    //  example 11: number_format('1.20', 4)
    //  returns 11: '1.2000'
    //  example 12: number_format('1.2000', 3)
    //  returns 12: '1.200'
    //  example 13: number_format('1 000,50', 2, '.', ' ')
    //  returns 13: '100 050.00'
    //  example 14: number_format(1e-8, 8, '.', '')
    //  returns 14: '0.00000001'
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '')
    var n = !isFinite(+number) ? 0 : +number
    var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals)
    var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep
    var dec = (typeof decPoint === 'undefined') ? '.' : decPoint
    var s = ''
    var toFixedFix = function (n, prec) {
        var k = Math.pow(10, prec)
        return '' + (Math.round(n * k) / k)
                .toFixed(prec)
    }
    // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.')
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep)
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || ''
        s[1] += new Array(prec - s[1].length + 1).join('0')
    }
    return s.join(dec)
}


















var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

function disableF5(e) {
    if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) {
        e.preventDefault();
    }
    document.oncontextmenu = function () {
        return false;
    };
}

function disableRightClick() {
    document.addEventListener('contextmenu', event => event.preventDefault());
}

function removeUrlAllParam() {
    window.history.replaceState(null, null, window.location.pathname);
}

function BlockReload() {
    $(document).on("keydown", disableF5);
    disableRightClick();
}

function regularNumber() {

    $('body').delegate(
            "input.regularNumber",
            "keypress",
            function (event) {
                var ew = event.which;
                if (48 <= ew && ew <= 57)
                    return true;
                return false;
            });
}

function regularLower() {
    $('body').delegate(
            "input.regularLower",
            "keypress",
            function (event) {
                var ew = event.which;
                if (ew == 32)
                    return true;
                if (48 <= ew && ew <= 57)
                    return true;
                if (97 <= ew && ew <= 122)
                    return true;
                return false;
            });
}
function formatPassword() {
    $('body').delegate(
            "input.formatPassword",
            "keypress",
            function (event) {
                var ew = event.which;
                if (ew == 32)
                    return true;
                if (48 <= ew && ew <= 57)
                    return true;
                if (65 <= ew && ew <= 90)
                    return true;
                if (97 <= ew && ew <= 122)
                    return true;
                return false;
            });

}
function number2digit() {
    $('body').delegate("input.number2digit", "focusin", function () {
        var tnumber = $(this).val();
        if (tnumber !== "0.00") {
            $(this).val(tnumber.replace(/,/g, ""));
        } else {
            $(this).val("");
        }
    });

    $('body').delegate(
            "input.number2digit",
            "keypress",
            function (event) {
                var text = $(this).val();

                if ((event.which !== 46 || text.indexOf('.') !== -1)
                        && ((event.which < 48 || event.which > 57) && (event.which !== 0 && event.which !== 8))) {
                    event.preventDefault();
                }

                if ((text.indexOf('.') !== -1) && (text.substring(text.indexOf('.')).length > 2)
                        && (($(this)[0].selectionStart - $(this)[0].selectionEnd) === 0)
                        && ($(this)[0].selectionStart >= $(this).val().length - 2) && (event.which !== 0 && event.which !== 8)) {
                    event.preventDefault();
                }
            });

    $('body').delegate(
            "input.number2digit",
            "keyup",
            function (event) {
                var size = this.value.toString().split(".")[1] ? this.value.toString().split(".")[1].length : 0;
//                if (this.value == 0) {
//                    this.value = 0;
//                }

                if (size >= 3) {
                    var num = this.value;
                    this.value = parseFloat(num).toFixed(2);
                }

            });



    $('body').delegate("input.number2digit", "focusout", function () {
        if ($(this).val() !== "") {
            var fnumb = number_format($(this).val(), 2, '.', ',');
            $(this).val(fnumb);
        } else if ($(this).value === "" || this.value == 0) {
            this.value = 0;
        } else {
            $(this).val("");
        }
    });
}
function currency() {
    $('body').delegate("input.currency", "focusin", function () {
        var tnumber = $(this).val();
        if (tnumber !== "0.00") {
            $(this).val(tnumber.replace(/,/g, ""));
        } else {
            $(this).val("");
        }
    });

    $('body').delegate(
            "input.currency",
            "keypress",
            function (event) {
                var text = $(this).val();

                if ((event.which !== 46 || text.indexOf('.') !== -1)
                        && ((event.which < 48 || event.which > 57) && (event.which !== 0 && event.which !== 8))) {
                    event.preventDefault();
                }

                if ((text.indexOf('.') !== -1) && (text.substring(text.indexOf('.')).length > 2)
                        && (($(this)[0].selectionStart - $(this)[0].selectionEnd) === 0)
                        && ($(this)[0].selectionStart >= $(this).val().length - 2) && (event.which !== 0 && event.which !== 8)) {
                    event.preventDefault();
                }
            });

    $('body').delegate(
            "input.currency",
            "keyup",
            function (event) {
                var size = this.value.toString().split(".")[1] ? this.value.toString().split(".")[1].length : 0;
                if (this.value == 0) {
                    this.value = 0;
                }

                if (size >= 3) {
                    var num = this.value;
                    this.value = parseFloat(num).toFixed(2);
                }

            });



    $('body').delegate("input.currency", "focusout", function () {
        if ($(this).val() !== "") {
            var fnumb = number_format($(this).val(), 2, '.', ',');
            $(this).val(fnumb);
        } else {
            $(this).val("");
        }
    });
}

var JSONViewer = (function (document) {
    var Object_prototype_toString = ({}).toString;
    var DatePrototypeAsString = Object_prototype_toString.call(new Date);

    /** @constructor */
    function JSONViewer() {
        this._dom_container = document.createElement("pre");
        this._dom_container.classList.add("json-viewer");
    }
    ;

    /**
     * Visualise JSON object.
     * 
     * @param {Object|Array} json Input value
     * @param {Number} [inputMaxLvl] Process only to max level, where 0..n, -1 unlimited
     * @param {Number} [inputColAt] Collapse at level, where 0..n, -1 unlimited
     */
    JSONViewer.prototype.showJSON = function (jsonValue, inputMaxLvl, inputColAt) {
        // Process only to maxLvl, where 0..n, -1 unlimited
        var maxLvl = typeof inputMaxLvl === "number" ? inputMaxLvl : -1; // max level
        // Collapse at level colAt, where 0..n, -1 unlimited
        var colAt = typeof inputColAt === "number" ? inputColAt : -1; // collapse at

        this._dom_container.innerHTML = "";
        walkJSONTree(this._dom_container, jsonValue, maxLvl, colAt, 0);
    };

    /**
     * Get container with pre object - this container is used for visualise JSON data.
     * 
     * @return {Element}
     */
    JSONViewer.prototype.getContainer = function () {
        return this._dom_container;
    };

    /**
     * Recursive walk for input value.
     * 
     * @param {Element} outputParent is the Element that will contain the new DOM
     * @param {Object|Array} value Input value
     * @param {Number} maxLvl Process only to max level, where 0..n, -1 unlimited
     * @param {Number} colAt Collapse at level, where 0..n, -1 unlimited
     * @param {Number} lvl Current level
     */
    function walkJSONTree(outputParent, value, maxLvl, colAt, lvl) {
        var isDate = Object_prototype_toString.call(value) === DatePrototypeAsString;
        var realValue = !isDate && typeof value === "object" && value !== null && "toJSON" in value ? value.toJSON() : value;
        if (typeof realValue === "object" && realValue !== null && !isDate) {
            var isMaxLvl = maxLvl >= 0 && lvl >= maxLvl;
            var isCollapse = colAt >= 0 && lvl >= colAt;

            var isArray = Array.isArray(realValue);
            var items = isArray ? realValue : Object.keys(realValue);

            if (lvl === 0) {
                // root level
                var rootCount = _createItemsCount(items.length);
                // hide/show
                var rootLink = _createLink(isArray ? "[" : "{");

                if (items.length) {
                    rootLink.addEventListener("click", function () {
                        if (isMaxLvl)
                            return;

                        rootLink.classList.toggle("collapsed");
                        rootCount.classList.toggle("hide");

                        // main list
                        outputParent.querySelector("ul").classList.toggle("hide");
                    });

                    if (isCollapse) {
                        rootLink.classList.add("collapsed");
                        rootCount.classList.remove("hide");
                    }
                } else {
                    rootLink.classList.add("empty");
                }

                rootLink.appendChild(rootCount);
                outputParent.appendChild(rootLink); // output the rootLink
            }

            if (items.length && !isMaxLvl) {
                var len = items.length - 1;
                var ulList = document.createElement("ul");
                ulList.setAttribute("data-level", lvl);
                ulList.classList.add("type-" + (isArray ? "array" : "object"));

                items.forEach(function (key, ind) {
                    var item = isArray ? key : value[key];
                    var li = document.createElement("li");

                    if (typeof item === "object") {
                        // null && date
                        if (!item || item instanceof Date) {
                            li.appendChild(document.createTextNode(isArray ? "" : key + ": "));
                            li.appendChild(createSimpleViewOf(item ? item : null, true));
                        }
                        // array & object
                        else {
                            var itemIsArray = Array.isArray(item);
                            var itemLen = itemIsArray ? item.length : Object.keys(item).length;

                            // empty
                            if (!itemLen) {
                                li.appendChild(document.createTextNode(key + ": " + (itemIsArray ? "[]" : "{}")));
                            } else {
                                // 1+ items
                                var itemTitle = (typeof key === "string" ? key + ": " : "") + (itemIsArray ? "[" : "{");
                                var itemLink = _createLink(itemTitle);
                                var itemsCount = _createItemsCount(itemLen);

                                // maxLvl - only text, no link
                                if (maxLvl >= 0 && lvl + 1 >= maxLvl) {
                                    li.appendChild(document.createTextNode(itemTitle));
                                } else {
                                    itemLink.appendChild(itemsCount);
                                    li.appendChild(itemLink);
                                }

                                walkJSONTree(li, item, maxLvl, colAt, lvl + 1);
                                li.appendChild(document.createTextNode(itemIsArray ? "]" : "}"));

                                var list = li.querySelector("ul");
                                var itemLinkCb = function () {
                                    itemLink.classList.toggle("collapsed");
                                    itemsCount.classList.toggle("hide");
                                    list.classList.toggle("hide");
                                };

                                // hide/show
                                itemLink.addEventListener("click", itemLinkCb);

                                // collapse lower level
                                if (colAt >= 0 && lvl + 1 >= colAt) {
                                    itemLinkCb();
                                }
                            }
                        }
                    }
                    // simple values
                    else {
                        // object keys with key:
                        if (!isArray) {
                            li.appendChild(document.createTextNode(key + ": "));
                        }

                        // recursive
                        walkJSONTree(li, item, maxLvl, colAt, lvl + 1);
                    }

                    // add comma to the end
                    if (ind < len) {
                        li.appendChild(document.createTextNode(","));
                    }

                    ulList.appendChild(li);
                }, this);

                outputParent.appendChild(ulList); // output ulList
            } else if (items.length && isMaxLvl) {
                var itemsCount = _createItemsCount(items.length);
                itemsCount.classList.remove("hide");

                outputParent.appendChild(itemsCount); // output itemsCount
            }

            if (lvl === 0) {
                // empty root
                if (!items.length) {
                    var itemsCount = _createItemsCount(0);
                    itemsCount.classList.remove("hide");

                    outputParent.appendChild(itemsCount); // output itemsCount
                }

                // root cover
                outputParent.appendChild(document.createTextNode(isArray ? "]" : "}"));

                // collapse
                if (isCollapse) {
                    outputParent.querySelector("ul").classList.add("hide");
                }
            }
        } else {
            // simple values
            outputParent.appendChild(createSimpleViewOf(value, isDate));
        }
    }
    ;

    /**
     * Create simple value (no object|array).
     * 
     * @param  {Number|String|null|undefined|Date} value Input value
     * @return {Element}
     */
    function createSimpleViewOf(value, isDate) {
        var spanEl = document.createElement("span");
        var type = typeof value;
        var asText = "" + value;

        if (type === "string") {
            asText = '"' + value + '"';
        } else if (value === null) {
            type = "null";
            //asText = "null";
        } else if (isDate) {
            type = "date";
            asText = value.toLocaleString();
        }

        spanEl.className = "type-" + type;
        spanEl.textContent = asText;

        return spanEl;
    }
    ;

    /**
     * Create items count element.
     * 
     * @param  {Number} count Items count
     * @return {Element}
     */
    function _createItemsCount(count) {
        var itemsCount = document.createElement("span");
        itemsCount.className = "items-ph hide";
        itemsCount.innerHTML = _getItemsTitle(count);

        return itemsCount;
    }
    ;

    /**
     * Create clickable link.
     * 
     * @param  {String} title Link title
     * @return {Element}
     */
    function _createLink(title) {
        var linkEl = document.createElement("a");
        linkEl.classList.add("list-link");
        linkEl.href = "javascript:void(0)";
        linkEl.innerHTML = title || "";

        return linkEl;
    }
    ;

    /**
     * Get correct item|s title for count.
     * 
     * @param  {Number} count Items count
     * @return {String}
     */
    function _getItemsTitle(count) {
        var itemsTxt = count > 1 || count === 0 ? "items" : "item";

        return (count + " " + itemsTxt);
    }
    ;

    return JSONViewer;
})(document);
