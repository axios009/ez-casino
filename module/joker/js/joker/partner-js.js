!(function (n) {
    "function" == typeof define && define.amd ? define(["jquery"], n) : n("object" == typeof exports ? require("jquery") : window.jQuery || window.Zepto);
})(function (n) {
    var t,
        it,
        f,
        p,
        o,
        pt,
        s = "Close",
        wt = "BeforeClose",
        ti = "AfterClose",
        ii = "BeforeAppend",
        rt = "MarkupParse",
        ut = "Open",
        bt = "Change",
        ft = "mfp",
        u = "." + ft,
        w = "mfp-ready",
        kt = "mfp-removing",
        et = "mfp-prevent-close",
        b = function () {},
        ot = !!window.jQuery,
        h = n(window),
        r = function (n, i) {
            t.ev.on(ft + n + u, i);
        },
        l = function (t, i, r, u) {
            var f = document.createElement("div");
            return (f.className = "mfp-" + t), r && (f.innerHTML = r), u ? i && i.appendChild(f) : ((f = n(f)), i && f.appendTo(i)), f;
        },
        i = function (i, r) {
            t.ev.triggerHandler(ft + i, r);
            t.st.callbacks && ((i = i.charAt(0).toLowerCase() + i.slice(1)), t.st.callbacks[i] && t.st.callbacks[i].apply(t, n.isArray(r) ? r : [r]));
        },
        st = function (i) {
            return (i === pt && t.currTemplate.closeBtn) || ((t.currTemplate.closeBtn = n(t.st.closeMarkup.replace("%title%", t.st.tClose))), (pt = i)), t.currTemplate.closeBtn;
        },
        ht = function () {
            n.magnificPopup.instance || ((t = new b()), t.init(), (n.magnificPopup.instance = t));
        },
        ri = function () {
            var n = document.createElement("p").style,
                t = ["ms", "O", "Moz", "Webkit"];
            if (void 0 !== n.transition) return !0;
            for (; t.length; ) if (t.pop() + "Transition" in n) return !0;
            return !1;
        },
        a,
        k,
        d,
        g,
        ct,
        e,
        gt,
        at,
        ni,
        nt,
        yt,
        tt;
    b.prototype = {
        constructor: b,
        init: function () {
            var i = navigator.appVersion;
            t.isLowIE = t.isIE8 = document.all && !document.addEventListener;
            t.isAndroid = /android/gi.test(i);
            t.isIOS = /iphone|ipad|ipod/gi.test(i);
            t.supportsTransition = ri();
            t.probablyMobile = t.isAndroid || t.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent);
            f = n(document);
            t.popupsCache = {};
        },
        open: function (e) {
            var s, c, p, b, a, k, v, d, y;
            if (e.isObj === !1) {
                for (t.items = e.items.toArray(), t.index = 0, p = e.items, s = 0; s < p.length; s++)
                    if (((c = p[s]), c.parsed && (c = c.el[0]), c === e.el[0])) {
                        t.index = s;
                        break;
                    }
            } else (t.items = n.isArray(e.items) ? e.items : [e.items]), (t.index = e.index || 0);
            if (t.isOpen) return void t.updateItemHTML();
            for (
                t.types = [],
                    o = "",
                    t.ev = e.mainEl && e.mainEl.length ? e.mainEl.eq(0) : f,
                    e.key ? (t.popupsCache[e.key] || (t.popupsCache[e.key] = {}), (t.currTemplate = t.popupsCache[e.key])) : (t.currTemplate = {}),
                    t.st = n.extend(!0, {}, n.magnificPopup.defaults, e),
                    t.fixedContentPos = "auto" === t.st.fixedContentPos ? !t.probablyMobile : t.st.fixedContentPos,
                    t.st.modal && ((t.st.closeOnContentClick = !1), (t.st.closeOnBgClick = !1), (t.st.showCloseBtn = !1), (t.st.enableEscapeKey = !1)),
                    t.bgOverlay ||
                        ((t.bgOverlay = l("bg").on("click" + u, function () {
                            t.close();
                        })),
                        (t.wrap = l("wrap")
                            .attr("tabindex", -1)
                            .on("click" + u, function (n) {
                                t._checkIfClose(n.target) && t.close();
                            })),
                        (t.container = l("container", t.wrap))),
                    t.contentContainer = l("content"),
                    t.st.preloader && (t.preloader = l("preloader", t.container, t.st.tLoading)),
                    b = n.magnificPopup.modules,
                    s = 0;
                s < b.length;
                s++
            )
                (a = b[s]), (a = a.charAt(0).toUpperCase() + a.slice(1)), t["init" + a].call(t);
            return (
                i("BeforeOpen"),
                t.st.showCloseBtn &&
                    (t.st.closeBtnInside
                        ? (r(rt, function (n, t, i, r) {
                              i.close_replaceWith = st(r.type);
                          }),
                          (o += " mfp-close-btn-in"))
                        : t.wrap.append(st())),
                t.st.alignTop && (o += " mfp-align-top"),
                t.fixedContentPos ? t.wrap.css({ overflow: t.st.overflowY, overflowX: "hidden", overflowY: t.st.overflowY }) : t.wrap.css({ top: h.scrollTop(), position: "absolute" }),
                (t.st.fixedBgPos === !1 || ("auto" === t.st.fixedBgPos && !t.fixedContentPos)) && t.bgOverlay.css({ height: f.height(), position: "absolute" }),
                t.st.enableEscapeKey &&
                    f.on("keyup" + u, function (n) {
                        27 === n.keyCode && t.close();
                    }),
                h.on("resize" + u, function () {
                    t.updateSize();
                }),
                t.st.closeOnContentClick || (o += " mfp-auto-cursor"),
                o && t.wrap.addClass(o),
                (k = t.wH = h.height()),
                (v = {}),
                t.fixedContentPos && t._hasScrollBar(k) && ((d = t._getScrollbarSize()), d && (v.marginRight = d)),
                t.fixedContentPos && (t.isIE7 ? n("body, html").css("overflow", "hidden") : (v.overflow = "hidden")),
                (y = t.st.mainClass),
                t.isIE7 && (y += " mfp-ie7"),
                y && t._addClassToMFP(y),
                t.updateItemHTML(),
                i("BuildControls"),
                n("html").css(v),
                t.bgOverlay.add(t.wrap).prependTo(t.st.prependTo || n(document.body)),
                (t._lastFocusedEl = document.activeElement),
                setTimeout(function () {
                    t.content ? (t._addClassToMFP(w), t._setFocus()) : t.bgOverlay.addClass(w);
                    f.on("focusin" + u, t._onFocusIn);
                }, 16),
                (t.isOpen = !0),
                t.updateSize(k),
                i(ut),
                e
            );
        },
        close: function () {
            t.isOpen &&
                (i(wt),
                (t.isOpen = !1),
                t.st.removalDelay && !t.isLowIE && t.supportsTransition
                    ? (t._addClassToMFP(kt),
                      setTimeout(function () {
                          t._close();
                      }, t.st.removalDelay))
                    : t._close());
        },
        _close: function () {
            var r, e;
            i(s);
            r = kt + " " + w + " ";
            (t.bgOverlay.detach(), t.wrap.detach(), t.container.empty(), t.st.mainClass && (r += t.st.mainClass + " "), t._removeClassFromMFP(r), t.fixedContentPos) &&
                ((e = { marginRight: "" }), t.isIE7 ? n("body, html").css("overflow", "") : (e.overflow = ""), n("html").css(e));
            f.off("keyup" + u + " focusin" + u);
            t.ev.off(u);
            t.wrap.attr("class", "mfp-wrap").removeAttr("style");
            t.bgOverlay.attr("class", "mfp-bg");
            t.container.attr("class", "mfp-container");
            !t.st.showCloseBtn || (t.st.closeBtnInside && t.currTemplate[t.currItem.type] !== !0) || (t.currTemplate.closeBtn && t.currTemplate.closeBtn.detach());
            t.st.autoFocusLast && t._lastFocusedEl && n(t._lastFocusedEl).focus();
            t.currItem = null;
            t.content = null;
            t.currTemplate = null;
            t.prevHeight = 0;
            i(ti);
        },
        updateSize: function (n) {
            if (t.isIOS) {
                var u = document.documentElement.clientWidth / window.innerWidth,
                    r = window.innerHeight * u;
                t.wrap.css("height", r);
                t.wH = r;
            } else t.wH = n || h.height();
            t.fixedContentPos || t.wrap.css("height", t.wH);
            i("Resize");
        },
        updateItemHTML: function () {
            var u = t.items[t.index],
                r,
                f,
                e;
            t.contentContainer.detach();
            t.content && t.content.detach();
            u.parsed || (u = t.parseEl(t.index));
            r = u.type;
            (i("BeforeChange", [t.currItem ? t.currItem.type : "", r]), (t.currItem = u), t.currTemplate[r]) || ((f = t.st[r] ? t.st[r].markup : !1), i("FirstMarkupParse", f), (t.currTemplate[r] = f ? n(f) : !0));
            p && p !== u.type && t.container.removeClass("mfp-" + p + "-holder");
            e = t["get" + r.charAt(0).toUpperCase() + r.slice(1)](u, t.currTemplate[r]);
            t.appendContent(e, r);
            u.preloaded = !0;
            i(bt, u);
            p = u.type;
            t.container.prepend(t.contentContainer);
            i("AfterChange");
        },
        appendContent: function (n, r) {
            t.content = n;
            n ? (t.st.showCloseBtn && t.st.closeBtnInside && t.currTemplate[r] === !0 ? t.content.find(".mfp-close").length || t.content.append(st()) : (t.content = n)) : (t.content = "");
            i(ii);
            t.container.addClass("mfp-" + r + "-holder");
            t.contentContainer.append(t.content);
        },
        parseEl: function (r) {
            var o,
                u = t.items[r],
                e,
                f;
            if ((u.tagName ? (u = { el: n(u) }) : ((o = u.type), (u = { data: u, src: u.src })), u.el)) {
                for (e = t.types, f = 0; f < e.length; f++)
                    if (u.el.hasClass("mfp-" + e[f])) {
                        o = e[f];
                        break;
                    }
                u.src = u.el.attr("data-mfp-src");
                u.src || (u.src = u.el.attr("href"));
            }
            return (u.type = o || t.st.type || "inline"), (u.index = r), (u.parsed = !0), (t.items[r] = u), i("ElementParse", u), t.items[r];
        },
        addGroup: function (n, i) {
            var u = function (r) {
                    r.mfpEl = this;
                    t._openClick(r, n, i);
                },
                r;
            i || (i = {});
            r = "click.magnificPopup";
            i.mainEl = n;
            i.items ? ((i.isObj = !0), n.off(r).on(r, u)) : ((i.isObj = !1), i.delegate ? n.off(r).on(r, i.delegate, u) : ((i.items = n), n.off(r).on(r, u)));
        },
        _openClick: function (i, r, u) {
            var e = void 0 !== u.midClick ? u.midClick : n.magnificPopup.defaults.midClick,
                f;
            if (e || !(2 === i.which || i.ctrlKey || i.metaKey || i.altKey || i.shiftKey)) {
                if (((f = void 0 !== u.disableOn ? u.disableOn : n.magnificPopup.defaults.disableOn), f))
                    if (n.isFunction(f)) {
                        if (!f.call(t)) return !0;
                    } else if (h.width() < f) return !0;
                i.type && (i.preventDefault(), t.isOpen && i.stopPropagation());
                u.el = n(i.mfpEl);
                u.delegate && (u.items = r.find(u.delegate));
                t.open(u);
            }
        },
        updateStatus: function (n, r) {
            if (t.preloader) {
                it !== n && t.container.removeClass("mfp-s-" + it);
                r || "loading" !== n || (r = t.st.tLoading);
                var u = { status: n, text: r };
                i("UpdateStatus", u);
                n = u.status;
                r = u.text;
                t.preloader.html(r);
                t.preloader.find("a").on("click", function (n) {
                    n.stopImmediatePropagation();
                });
                t.container.addClass("mfp-s-" + n);
                it = n;
            }
        },
        _checkIfClose: function (i) {
            if (!n(i).hasClass(et)) {
                var r = t.st.closeOnContentClick,
                    u = t.st.closeOnBgClick;
                if ((r && u) || !t.content || n(i).hasClass("mfp-close") || (t.preloader && i === t.preloader[0])) return !0;
                if (i === t.content[0] || n.contains(t.content[0], i)) {
                    if (r) return !0;
                } else if (u && n.contains(document, i)) return !0;
                return !1;
            }
        },
        _addClassToMFP: function (n) {
            t.bgOverlay.addClass(n);
            t.wrap.addClass(n);
        },
        _removeClassFromMFP: function (n) {
            this.bgOverlay.removeClass(n);
            t.wrap.removeClass(n);
        },
        _hasScrollBar: function (n) {
            return (t.isIE7 ? f.height() : document.body.scrollHeight) > (n || h.height());
        },
        _setFocus: function () {
            (t.st.focus ? t.content.find(t.st.focus).eq(0) : t.wrap).focus();
        },
        _onFocusIn: function (i) {
            if (i.target !== t.wrap[0] && !n.contains(t.wrap[0], i.target)) return t._setFocus(), !1;
        },
        _parseMarkup: function (t, r, f) {
            var e;
            f.data && (r = n.extend(f.data, r));
            i(rt, [t, r, f]);
            n.each(r, function (i, r) {
                var f, o;
                if (void 0 === r || r === !1) return !0;
                ((e = i.split("_")), e.length > 1)
                    ? ((f = t.find(u + "-" + e[0])),
                      f.length > 0 &&
                          ((o = e[1]), "replaceWith" === o ? f[0] !== r[0] && f.replaceWith(r) : "img" === o ? (f.is("img") ? f.attr("src", r) : f.replaceWith(n("<img>").attr("src", r).attr("class", f.attr("class")))) : f.attr(e[1], r)))
                    : t.find(u + "-" + i).html(r);
            });
        },
        _getScrollbarSize: function () {
            if (void 0 === t.scrollbarSize) {
                var n = document.createElement("div");
                n.style.cssText = "width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;";
                document.body.appendChild(n);
                t.scrollbarSize = n.offsetWidth - n.clientWidth;
                document.body.removeChild(n);
            }
            return t.scrollbarSize;
        },
    };
    n.magnificPopup = {
        instance: null,
        proto: b.prototype,
        modules: [],
        open: function (t, i) {
            return ht(), (t = t ? n.extend(!0, {}, t) : {}), (t.isObj = !0), (t.index = i || 0), this.instance.open(t);
        },
        close: function () {
            return n.magnificPopup.instance && n.magnificPopup.instance.close();
        },
        registerModule: function (t, i) {
            i.options && (n.magnificPopup.defaults[t] = i.options);
            n.extend(this.proto, i.proto);
            this.modules.push(t);
        },
        defaults: {
            disableOn: 0,
            key: null,
            midClick: !1,
            mainClass: "",
            preloader: !0,
            focus: "",
            closeOnContentClick: !1,
            closeOnBgClick: !0,
            closeBtnInside: !0,
            showCloseBtn: !0,
            enableEscapeKey: !0,
            modal: !1,
            alignTop: !1,
            removalDelay: 0,
            prependTo: null,
            fixedContentPos: "auto",
            fixedBgPos: "auto",
            overflowY: "auto",
            closeMarkup: '<button title="%title%" type="button" class="mfp-close">&#215;</button>',
            tClose: "Close (Esc)",
            tLoading: "Loading...",
            autoFocusLast: !0,
        },
    };
    n.fn.magnificPopup = function (i) {
        var r, u, f, e;
        return (
            ht(),
            (r = n(this)),
            "string" == typeof i
                ? "open" === i
                    ? ((f = ot ? r.data("magnificPopup") : r[0].magnificPopup),
                      (e = parseInt(arguments[1], 10) || 0),
                      f.items ? (u = f.items[e]) : ((u = r), f.delegate && (u = u.find(f.delegate)), (u = u.eq(e))),
                      t._openClick({ mfpEl: u }, r, f))
                    : t.isOpen && t[i].apply(t, Array.prototype.slice.call(arguments, 1))
                : ((i = n.extend(!0, {}, i)), ot ? r.data("magnificPopup", i) : (r[0].magnificPopup = i), t.addGroup(r, i)),
            r
        );
    };
    g = "inline";
    ct = function () {
        d && (k.after(d.addClass(a)).detach(), (d = null));
    };
    n.magnificPopup.registerModule(g, {
        options: { hiddenClass: "hide", markup: "", tNotFound: "Content not found" },
        proto: {
            initInline: function () {
                t.types.push(g);
                r(s + "." + g, function () {
                    ct();
                });
            },
            getInline: function (i, r) {
                var f, u, e;
                return (ct(), i.src)
                    ? ((f = t.st.inline),
                      (u = n(i.src)),
                      u.length
                          ? ((e = u[0].parentNode), e && e.tagName && (k || ((a = f.hiddenClass), (k = l(a)), (a = "mfp-" + a)), (d = u.after(k).detach().removeClass(a))), t.updateStatus("ready"))
                          : (t.updateStatus("error", f.tNotFound), (u = n("<div>"))),
                      (i.inlineElement = u),
                      u)
                    : (t.updateStatus("ready"), t._parseMarkup(r, {}, i), r);
            },
        },
    });
    var v,
        y = "ajax",
        lt = function () {
            v && n(document.body).removeClass(v);
        },
        dt = function () {
            lt();
            t.req && t.req.abort();
        };
    n.magnificPopup.registerModule(y, {
        options: { settings: null, cursor: "mfp-ajax-cur", tError: '<a href="%url%">The content</a> could not be loaded.' },
        proto: {
            initAjax: function () {
                t.types.push(y);
                v = t.st.ajax.cursor;
                r(s + "." + y, dt);
                r("BeforeChange." + y, dt);
            },
            getAjax: function (r) {
                v && n(document.body).addClass(v);
                t.updateStatus("loading");
                var u = n.extend(
                    {
                        url: r.src,
                        success: function (u, f, e) {
                            var o = { data: u, xhr: e };
                            i("ParseAjax", o);
                            t.appendContent(n(o.data), y);
                            r.finished = !0;
                            lt();
                            t._setFocus();
                            setTimeout(function () {
                                t.wrap.addClass(w);
                            }, 16);
                            t.updateStatus("ready");
                            i("AjaxContentAdded");
                        },
                        error: function () {
                            lt();
                            r.finished = r.loadError = !0;
                            t.updateStatus("error", t.st.ajax.tError.replace("%url%", r.src));
                        },
                    },
                    t.st.ajax.settings
                );
                return (t.req = n.ajax(u)), "";
            },
        },
    });
    gt = function (i) {
        if (i.data && void 0 !== i.data.title) return i.data.title;
        var r = t.st.image.titleSrc;
        if (r) {
            if (n.isFunction(r)) return r.call(t, i);
            if (i.el) return i.el.attr(r) || "";
        }
        return "";
    };
    n.magnificPopup.registerModule("image", {
        options: {
            markup:
                '<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',
            cursor: "mfp-zoom-out-cur",
            titleSrc: "title",
            verticalFit: !0,
            tError: '<a href="%url%">The image</a> could not be loaded.',
        },
        proto: {
            initImage: function () {
                var i = t.st.image,
                    f = ".image";
                t.types.push("image");
                r(ut + f, function () {
                    "image" === t.currItem.type && i.cursor && n(document.body).addClass(i.cursor);
                });
                r(s + f, function () {
                    i.cursor && n(document.body).removeClass(i.cursor);
                    h.off("resize" + u);
                });
                r("Resize" + f, t.resizeImage);
                t.isLowIE && r("AfterChange", t.resizeImage);
            },
            resizeImage: function () {
                var n = t.currItem,
                    i;
                n && n.img && t.st.image.verticalFit && ((i = 0), t.isLowIE && (i = parseInt(n.img.css("padding-top"), 10) + parseInt(n.img.css("padding-bottom"), 10)), n.img.css("max-height", t.wH - i));
            },
            _onImageHasSize: function (n) {
                n.img && ((n.hasSize = !0), e && clearInterval(e), (n.isCheckingImgSize = !1), i("ImageHasSize", n), n.imgHidden && (t.content && t.content.removeClass("mfp-loading"), (n.imgHidden = !1)));
            },
            findImageSize: function (n) {
                var i = 0,
                    u = n.img[0],
                    r = function (f) {
                        e && clearInterval(e);
                        e = setInterval(function () {
                            return u.naturalWidth > 0 ? void t._onImageHasSize(n) : (i > 200 && clearInterval(e), i++, void (3 === i ? r(10) : 40 === i ? r(50) : 100 === i && r(500)));
                        }, f);
                    };
                r(1);
            },
            getImage: function (r, u) {
                var o = 0,
                    s = function () {
                        r &&
                            (r.img[0].complete
                                ? (r.img.off(".mfploader"), r === t.currItem && (t._onImageHasSize(r), t.updateStatus("ready")), (r.hasSize = !0), (r.loaded = !0), i("ImageLoadComplete"))
                                : (o++, 200 > o ? setTimeout(s, 100) : h()));
                    },
                    h = function () {
                        r && (r.img.off(".mfploader"), r === t.currItem && (t._onImageHasSize(r), t.updateStatus("error", c.tError.replace("%url%", r.src))), (r.hasSize = !0), (r.loaded = !0), (r.loadError = !0));
                    },
                    c = t.st.image,
                    l = u.find(".mfp-img"),
                    f;
                return (
                    l.length &&
                        ((f = document.createElement("img")),
                        (f.className = "mfp-img"),
                        r.el && r.el.find("img").length && (f.alt = r.el.find("img").attr("alt")),
                        (r.img = n(f).on("load.mfploader", s).on("error.mfploader", h)),
                        (f.src = r.src),
                        l.is("img") && (r.img = r.img.clone()),
                        (f = r.img[0]),
                        f.naturalWidth > 0 ? (r.hasSize = !0) : f.width || (r.hasSize = !1)),
                    t._parseMarkup(u, { title: gt(r), img_replaceWith: r.img }, r),
                    t.resizeImage(),
                    r.hasSize
                        ? (e && clearInterval(e), r.loadError ? (u.addClass("mfp-loading"), t.updateStatus("error", c.tError.replace("%url%", r.src))) : (u.removeClass("mfp-loading"), t.updateStatus("ready")), u)
                        : (t.updateStatus("loading"), (r.loading = !0), r.hasSize || ((r.imgHidden = !0), u.addClass("mfp-loading"), t.findImageSize(r)), u)
                );
            },
        },
    });
    ni = function () {
        return void 0 === at && (at = void 0 !== document.createElement("p").style.MozTransform), at;
    };
    n.magnificPopup.registerModule("zoom", {
        options: {
            enabled: !1,
            easing: "ease-in-out",
            duration: 300,
            opener: function (n) {
                return n.is("img") ? n : n.find("img");
            },
        },
        proto: {
            initZoom: function () {
                var u,
                    f = t.st.zoom,
                    o = ".zoom";
                if (f.enabled && t.supportsTransition) {
                    var e,
                        n,
                        c = f.duration,
                        l = function (n) {
                            var r = n.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),
                                u = "all " + f.duration / 1e3 + "s " + f.easing,
                                t = { position: "fixed", zIndex: 9999, left: 0, top: 0, "-webkit-backface-visibility": "hidden" },
                                i = "transition";
                            return (t["-webkit-" + i] = t["-moz-" + i] = t["-o-" + i] = t[i] = u), r.css(t), r;
                        },
                        h = function () {
                            t.content.css("visibility", "visible");
                        };
                    r("BuildControls" + o, function () {
                        if (t._allowZoom()) {
                            if ((clearTimeout(e), t.content.css("visibility", "hidden"), (u = t._getItemToZoom()), !u)) return void h();
                            n = l(u);
                            n.css(t._getOffset());
                            t.wrap.append(n);
                            e = setTimeout(function () {
                                n.css(t._getOffset(!0));
                                e = setTimeout(function () {
                                    h();
                                    setTimeout(function () {
                                        n.remove();
                                        u = n = null;
                                        i("ZoomAnimationEnded");
                                    }, 16);
                                }, c);
                            }, 16);
                        }
                    });
                    r(wt + o, function () {
                        if (t._allowZoom()) {
                            if ((clearTimeout(e), (t.st.removalDelay = c), !u)) {
                                if (((u = t._getItemToZoom()), !u)) return;
                                n = l(u);
                            }
                            n.css(t._getOffset(!0));
                            t.wrap.append(n);
                            t.content.css("visibility", "hidden");
                            setTimeout(function () {
                                n.css(t._getOffset());
                            }, 16);
                        }
                    });
                    r(s + o, function () {
                        t._allowZoom() && (h(), n && n.remove(), (u = null));
                    });
                }
            },
            _allowZoom: function () {
                return "image" === t.currItem.type;
            },
            _getItemToZoom: function () {
                return t.currItem.hasSize ? t.currItem.img : !1;
            },
            _getOffset: function (i) {
                var r, u;
                r = i ? t.currItem.img : t.st.zoom.opener(t.currItem.el || t.currItem);
                var f = r.offset(),
                    e = parseInt(r.css("padding-top"), 10),
                    o = parseInt(r.css("padding-bottom"), 10);
                return (
                    (f.top -= n(window).scrollTop() - e),
                    (u = { width: r.width(), height: (ot ? r.innerHeight() : r[0].offsetHeight) - o - e }),
                    ni() ? (u["-moz-transform"] = u.transform = "translate(" + f.left + "px," + f.top + "px)") : ((u.left = f.left), (u.top = f.top)),
                    u
                );
            },
        },
    });
    var c = "iframe",
        ui = "//about:blank",
        vt = function (n) {
            if (t.currTemplate[c]) {
                var i = t.currTemplate[c].find("iframe");
                i.length && (n || (i[0].src = ui), t.isIE8 && i.css("display", n ? "block" : "none"));
            }
        };
    n.magnificPopup.registerModule(c, {
        options: {
            markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',
            srcAction: "iframe_src",
            patterns: {
                youtube: { index: "youtube.com", id: "v=", src: "//www.youtube.com/embed/%id%?autoplay=1" },
                vimeo: { index: "vimeo.com/", id: "/", src: "//player.vimeo.com/video/%id%?autoplay=1" },
                gmaps: { index: "//maps.google.", src: "%id%&output=embed" },
            },
        },
        proto: {
            initIframe: function () {
                t.types.push(c);
                r("BeforeChange", function (n, t, i) {
                    t !== i && (t === c ? vt() : i === c && vt(!0));
                });
                r(s + "." + c, function () {
                    vt();
                });
            },
            getIframe: function (i, r) {
                var u = i.src,
                    f = t.st.iframe,
                    e;
                return (
                    n.each(f.patterns, function () {
                        if (u.indexOf(this.index) > -1) return this.id && (u = "string" == typeof this.id ? u.substr(u.lastIndexOf(this.id) + this.id.length, u.length) : this.id.call(this, u)), (u = this.src.replace("%id%", u)), !1;
                    }),
                    (e = {}),
                    f.srcAction && (e[f.srcAction] = u),
                    t._parseMarkup(r, e, i),
                    t.updateStatus("ready"),
                    r
                );
            },
        },
    });
    nt = function (n) {
        var i = t.items.length;
        return n > i - 1 ? n - i : 0 > n ? i + n : n;
    };
    yt = function (n, t, i) {
        return n.replace(/%curr%/gi, t + 1).replace(/%total%/gi, i);
    };
    n.magnificPopup.registerModule("gallery", {
        options: {
            enabled: !1,
            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
            preload: [0, 2],
            navigateByImgClick: !0,
            arrows: !0,
            tPrev: "Previous (Left arrow key)",
            tNext: "Next (Right arrow key)",
            tCounter: "%curr% of %total%",
        },
        proto: {
            initGallery: function () {
                var u = t.st.gallery,
                    i = ".mfp-gallery";
                return (
                    (t.direction = !0),
                    u && u.enabled
                        ? ((o += " mfp-gallery"),
                          r(ut + i, function () {
                              u.navigateByImgClick &&
                                  t.wrap.on("click" + i, ".mfp-img", function () {
                                      if (t.items.length > 1) return t.next(), !1;
                                  });
                              f.on("keydown" + i, function (n) {
                                  37 === n.keyCode ? t.prev() : 39 === n.keyCode && t.next();
                              });
                          }),
                          r("UpdateStatus" + i, function (n, i) {
                              i.text && (i.text = yt(i.text, t.currItem.index, t.items.length));
                          }),
                          r(rt + i, function (n, i, r, f) {
                              var e = t.items.length;
                              r.counter = e > 1 ? yt(u.tCounter, f.index, e) : "";
                          }),
                          r("BuildControls" + i, function () {
                              if (t.items.length > 1 && u.arrows && !t.arrowLeft) {
                                  var i = u.arrowMarkup,
                                      r = (t.arrowLeft = n(i.replace(/%title%/gi, u.tPrev).replace(/%dir%/gi, "left")).addClass(et)),
                                      f = (t.arrowRight = n(i.replace(/%title%/gi, u.tNext).replace(/%dir%/gi, "right")).addClass(et));
                                  r.click(function () {
                                      t.prev();
                                  });
                                  f.click(function () {
                                      t.next();
                                  });
                                  t.container.append(r.add(f));
                              }
                          }),
                          r(bt + i, function () {
                              t._preloadTimeout && clearTimeout(t._preloadTimeout);
                              t._preloadTimeout = setTimeout(function () {
                                  t.preloadNearbyImages();
                                  t._preloadTimeout = null;
                              }, 16);
                          }),
                          void r(s + i, function () {
                              f.off(i);
                              t.wrap.off("click" + i);
                              t.arrowRight = t.arrowLeft = null;
                          }))
                        : !1
                );
            },
            next: function () {
                t.direction = !0;
                t.index = nt(t.index + 1);
                t.updateItemHTML();
            },
            prev: function () {
                t.direction = !1;
                t.index = nt(t.index - 1);
                t.updateItemHTML();
            },
            goTo: function (n) {
                t.direction = n >= t.index;
                t.index = n;
                t.updateItemHTML();
            },
            preloadNearbyImages: function () {
                for (var i = t.st.gallery.preload, r = Math.min(i[0], t.items.length), u = Math.min(i[1], t.items.length), n = 1; n <= (t.direction ? u : r); n++) t._preloadItem(t.index + n);
                for (n = 1; n <= (t.direction ? r : u); n++) t._preloadItem(t.index - n);
            },
            _preloadItem: function (r) {
                if (((r = nt(r)), !t.items[r].preloaded)) {
                    var u = t.items[r];
                    u.parsed || (u = t.parseEl(r));
                    i("LazyLoad", u);
                    "image" === u.type &&
                        (u.img = n('<img class="mfp-img" />')
                            .on("load.mfploader", function () {
                                u.hasSize = !0;
                            })
                            .on("error.mfploader", function () {
                                u.hasSize = !0;
                                u.loadError = !0;
                                i("LazyLoadError", u);
                            })
                            .attr("src", u.src));
                    u.preloaded = !0;
                }
            },
        },
    });
    tt = "retina";
    n.magnificPopup.registerModule(tt, {
        options: {
            replaceSrc: function (n) {
                return n.src.replace(/\.\w+$/, function (n) {
                    return "@2x" + n;
                });
            },
            ratio: 1,
        },
        proto: {
            initRetina: function () {
                if (window.devicePixelRatio > 1) {
                    var i = t.st.retina,
                        n = i.ratio;
                    n = isNaN(n) ? n() : n;
                    n > 1 &&
                        (r("ImageHasSize." + tt, function (t, i) {
                            i.img.css({ "max-width": i.img[0].naturalWidth / n, width: "100%" });
                        }),
                        r("ElementParse." + tt, function (t, r) {
                            r.src = i.replaceSrc(r, n);
                        }));
                }
            },
        },
    });
    ht();
}),
    (function (n) {
        n.fn.marquee = function (t) {
            return this.each(function () {
                var i = n.extend({}, n.fn.marquee.defaults, t),
                    r = n(this),
                    u,
                    p,
                    f = 3,
                    nt = "animation-play-state",
                    a = !1,
                    ft = function (n, t, i) {
                        for (var u = ["webkit", "moz", "MS", "o", ""], r = 0; r < u.length; r++) u[r] || (t = t.toLowerCase()), n.addEventListener(u[r] + t, i, !1);
                    },
                    et = function (n) {
                        var t = [];
                        for (var i in n) n.hasOwnProperty(i) && t.push(i + ":" + n[i]);
                        return t.push(), "{" + t.join(",") + "}";
                    },
                    w = {
                        pause: function () {
                            a && i.allowCss3Support ? u.css(nt, "paused") : n.fn.pause && u.pause();
                            r.data("runningStatus", "paused");
                            r.trigger("paused");
                        },
                        resume: function () {
                            a && i.allowCss3Support ? u.css(nt, "running") : n.fn.resume && u.resume();
                            r.data("runningStatus", "resumed");
                            r.trigger("resumed");
                        },
                        toggle: function () {
                            w["resumed" == r.data("runningStatus") ? "pause" : "resume"]();
                        },
                        destroy: function () {
                            clearTimeout(r.timer);
                            r.find("*").addBack().unbind();
                            r.html(r.find(".js-marquee:first").html());
                        },
                    },
                    b,
                    k,
                    v,
                    o,
                    l,
                    h,
                    c,
                    g,
                    tt,
                    it,
                    d;
                if ("string" == typeof t) n.isFunction(w[t]) && (u || (u = r.find(".js-marquee-wrapper")), !0 === r.data("css3AnimationIsSupported") && (a = !0), w[t]());
                else {
                    if (
                        (n.each(i, function (n) {
                            if (((b = r.attr("data-" + n)), "undefined" != typeof b)) {
                                switch (b) {
                                    case "true":
                                        b = !0;
                                        break;
                                    case "false":
                                        b = !1;
                                }
                                i[n] = b;
                            }
                        }),
                        i.speed && (i.duration = (parseInt(r.width(), 10) / i.speed) * 1e3),
                        (k = "up" == i.direction || "down" == i.direction),
                        (i.gap = i.duplicated ? parseInt(i.gap) : 0),
                        r.wrapInner('<div class="js-marquee"></div>'),
                        (v = r.find(".js-marquee").css({ "margin-right": i.gap, float: "left" })),
                        i.duplicated && v.clone(!0).appendTo(r),
                        r.wrapInner('<div style="width:100000px" class="js-marquee-wrapper"></div>'),
                        (u = r.find(".js-marquee-wrapper")),
                        k
                            ? ((o = r.height()),
                              u.removeAttr("style"),
                              r.height(o),
                              r.find(".js-marquee").css({ float: "none", "margin-bottom": i.gap, "margin-right": 0 }),
                              i.duplicated && r.find(".js-marquee:last").css({ "margin-bottom": 0 }),
                              (l = r.find(".js-marquee:first").height() + i.gap),
                              i.startVisible && !i.duplicated
                                  ? ((i._completeDuration = ((parseInt(l, 10) + parseInt(o, 10)) / parseInt(o, 10)) * i.duration), (i.duration *= parseInt(l, 10) / parseInt(o, 10)))
                                  : (i.duration *= (parseInt(l, 10) + parseInt(o, 10)) / parseInt(o, 10)))
                            : ((h = r.find(".js-marquee:first").width() + i.gap),
                              (c = r.width()),
                              i.startVisible && !i.duplicated
                                  ? ((i._completeDuration = ((parseInt(h, 10) + parseInt(c, 10)) / parseInt(c, 10)) * i.duration), (i.duration *= parseInt(h, 10) / parseInt(c, 10)))
                                  : (i.duration *= (parseInt(h, 10) + parseInt(c, 10)) / parseInt(c, 10))),
                        i.duplicated && (i.duration /= 2),
                        i.allowCss3Support)
                    ) {
                        v = document.body || document.createElement("div");
                        var s = "marqueeAnimation-" + Math.floor(1e7 * Math.random()),
                            rt = ["Webkit", "Moz", "O", "ms", "Khtml"],
                            ut = "animation",
                            e = "",
                            y = "";
                        if ((v.style.animation && ((y = "@keyframes " + s + " "), (a = !0)), !1 === a))
                            for (g = 0; g < rt.length; g++)
                                if (void 0 !== v.style[rt[g] + "AnimationName"]) {
                                    v = "-" + rt[g].toLowerCase() + "-";
                                    ut = v + ut;
                                    nt = v + nt;
                                    y = "@" + v + "keyframes " + s + " ";
                                    a = !0;
                                    break;
                                }
                        a && ((e = s + " " + i.duration / 1e3 + "s " + i.delayBeforeStart / 1e3 + "s infinite " + i.css3easing), r.data("css3AnimationIsSupported", !0));
                    }
                    tt = function () {
                        u.css("transform", "translateY(" + ("up" == i.direction ? o + "px" : "-" + l + "px") + ")");
                    };
                    it = function () {
                        u.css("transform", "translateX(" + ("left" == i.direction ? c + "px" : "-" + h + "px") + ")");
                    };
                    i.duplicated
                        ? (k
                              ? i.startVisible
                                  ? u.css("transform", "translateY(0)")
                                  : u.css("transform", "translateY(" + ("up" == i.direction ? o + "px" : "-" + (2 * l - i.gap) + "px") + ")")
                              : i.startVisible
                              ? u.css("transform", "translateX(0)")
                              : u.css("transform", "translateX(" + ("left" == i.direction ? c + "px" : "-" + (2 * h - i.gap) + "px") + ")"),
                          i.startVisible || (f = 1))
                        : i.startVisible
                        ? (f = 2)
                        : k
                        ? tt()
                        : it();
                    d = function () {
                        if (
                            (i.duplicated &&
                                (1 === f
                                    ? ((i._originalDuration = i.duration),
                                      (i.duration = k ? ("up" == i.direction ? i.duration + o / (l / i.duration) : 2 * i.duration) : "left" == i.direction ? i.duration + c / (h / i.duration) : 2 * i.duration),
                                      e && (e = s + " " + i.duration / 1e3 + "s " + i.delayBeforeStart / 1e3 + "s " + i.css3easing),
                                      f++)
                                    : 2 === f && ((i.duration = i._originalDuration), e && ((s += "0"), (y = n.trim(y) + "0 "), (e = s + " " + i.duration / 1e3 + "s 0s infinite " + i.css3easing)), f++)),
                            k
                                ? i.duplicated
                                    ? (2 < f && u.css("transform", "translateY(" + ("up" == i.direction ? 0 : "-" + l + "px") + ")"), (p = { transform: "translateY(" + ("up" == i.direction ? "-" + l + "px" : 0) + ")" }))
                                    : i.startVisible
                                    ? 2 === f
                                        ? (e && (e = s + " " + i.duration / 1e3 + "s " + i.delayBeforeStart / 1e3 + "s " + i.css3easing), (p = { transform: "translateY(" + ("up" == i.direction ? "-" + l + "px" : o + "px") + ")" }), f++)
                                        : 3 === f && ((i.duration = i._completeDuration), e && ((s += "0"), (y = n.trim(y) + "0 "), (e = s + " " + i.duration / 1e3 + "s 0s infinite " + i.css3easing)), tt())
                                    : (tt(), (p = { transform: "translateY(" + ("up" == i.direction ? "-" + u.height() + "px" : o + "px") + ")" }))
                                : i.duplicated
                                ? (2 < f && u.css("transform", "translateX(" + ("left" == i.direction ? 0 : "-" + h + "px") + ")"), (p = { transform: "translateX(" + ("left" == i.direction ? "-" + h + "px" : 0) + ")" }))
                                : i.startVisible
                                ? 2 === f
                                    ? (e && (e = s + " " + i.duration / 1e3 + "s " + i.delayBeforeStart / 1e3 + "s " + i.css3easing), (p = { transform: "translateX(" + ("left" == i.direction ? "-" + h + "px" : c + "px") + ")" }), f++)
                                    : 3 === f && ((i.duration = i._completeDuration), e && ((s += "0"), (y = n.trim(y) + "0 "), (e = s + " " + i.duration / 1e3 + "s 0s infinite " + i.css3easing)), it())
                                : (it(), (p = { transform: "translateX(" + ("left" == i.direction ? "-" + h + "px" : c + "px") + ")" })),
                            r.trigger("beforeStarting"),
                            a)
                        ) {
                            u.css(ut, e);
                            var t = y + " { 100%  " + et(p) + "}",
                                v = u.find("style");
                            0 !== v.length ? v.filter(":last").html(t) : n("head").append("<style>" + t + "</style>");
                            ft(u[0], "AnimationIteration", function () {
                                r.trigger("finished");
                            });
                            ft(u[0], "AnimationEnd", function () {
                                d();
                                r.trigger("finished");
                            });
                        } else
                            u.animate(p, i.duration, i.easing, function () {
                                r.trigger("finished");
                                i.pauseOnCycle ? (r.timer = setTimeout(d, i.delayBeforeStart)) : d();
                            });
                        r.data("runningStatus", "resumed");
                    };
                    r.bind("pause", w.pause);
                    r.bind("resume", w.resume);
                    i.pauseOnHover && (r.bind("mouseenter", w.pause), r.bind("mouseleave", w.resume));
                    a && i.allowCss3Support ? d() : (r.timer = setTimeout(d, i.delayBeforeStart));
                }
            });
        };
        n.fn.marquee.defaults = { allowCss3Support: !0, css3easing: "linear", easing: "linear", delayBeforeStart: 1e3, direction: "left", duplicated: !1, duration: 5e3, gap: 20, pauseOnCycle: !1, pauseOnHover: !1, startVisible: !1 };
    })(jQuery);
!(function (n, t) {
    "object" == typeof exports && "undefined" != typeof module ? (module.exports = t()) : "function" == typeof define && define.amd ? define(t) : (n.moment = t());
})(this, function () {
    "use strict";
    function t() {
        return ke.apply(null, arguments);
    }
    function tt(n) {
        return n instanceof Array || "[object Array]" === Object.prototype.toString.call(n);
    }
    function hi(n) {
        return null != n && "[object Object]" === Object.prototype.toString.call(n);
    }
    function p(n) {
        return void 0 === n;
    }
    function dt(n) {
        return "number" == typeof n || "[object Number]" === Object.prototype.toString.call(n);
    }
    function di(n) {
        return n instanceof Date || "[object Date]" === Object.prototype.toString.call(n);
    }
    function of(n, t) {
        for (var r = [], i = 0; i < n.length; ++i) r.push(t(n[i], i));
        return r;
    }
    function l(n, t) {
        return Object.prototype.hasOwnProperty.call(n, t);
    }
    function vt(n, t) {
        for (var i in t) l(t, i) && (n[i] = t[i]);
        return l(t, "toString") && (n.toString = t.toString), l(t, "valueOf") && (n.valueOf = t.valueOf), n;
    }
    function ft(n, t, i, r) {
        return re(n, t, i, r, !0).utc();
    }
    function u(n) {
        return (
            null == n._pf &&
                (n._pf = {
                    empty: !1,
                    unusedTokens: [],
                    unusedInput: [],
                    overflow: -2,
                    charsLeftOver: 0,
                    nullInput: !1,
                    invalidMonth: null,
                    invalidFormat: !1,
                    userInvalidated: !1,
                    iso: !1,
                    parsedDateParts: [],
                    meridiem: null,
                    rfc2822: !1,
                    weekdayMismatch: !1,
                }),
            n._pf
        );
    }
    function wr(n) {
        if (null == n._isValid) {
            var t = u(n),
                r = de.call(t.parsedDateParts, function (n) {
                    return null != n;
                }),
                i = !isNaN(n._d.getTime()) && t.overflow < 0 && !t.empty && !t.invalidMonth && !t.invalidWeekday && !t.weekdayMismatch && !t.nullInput && !t.invalidFormat && !t.userInvalidated && (!t.meridiem || (t.meridiem && r));
            if ((n._strict && (i = i && 0 === t.charsLeftOver && 0 === t.unusedTokens.length && void 0 === t.bigHour), null != Object.isFrozen && Object.isFrozen(n))) return i;
            n._isValid = i;
        }
        return n._isValid;
    }
    function gi(n) {
        var t = ft(NaN);
        return null != n ? vt(u(t), n) : (u(t).userInvalidated = !0), t;
    }
    function br(n, t) {
        var i, r, f;
        if (
            (p(t._isAMomentObject) || (n._isAMomentObject = t._isAMomentObject),
            p(t._i) || (n._i = t._i),
            p(t._f) || (n._f = t._f),
            p(t._l) || (n._l = t._l),
            p(t._strict) || (n._strict = t._strict),
            p(t._tzm) || (n._tzm = t._tzm),
            p(t._isUTC) || (n._isUTC = t._isUTC),
            p(t._offset) || (n._offset = t._offset),
            p(t._pf) || (n._pf = u(t)),
            p(t._locale) || (n._locale = t._locale),
            pu.length > 0)
        )
            for (i = 0; i < pu.length; i++) p((f = t[(r = pu[i])])) || (n[r] = f);
        return n;
    }
    function ci(n) {
        br(this, n);
        this._d = new Date(null != n._d ? n._d.getTime() : NaN);
        this.isValid() || (this._d = new Date(NaN));
        !1 === wu && ((wu = !0), t.updateOffset(this), (wu = !1));
    }
    function yt(n) {
        return n instanceof ci || (null != n && null != n._isAMomentObject);
    }
    function d(n) {
        return n < 0 ? Math.ceil(n) || 0 : Math.floor(n);
    }
    function f(n) {
        var t = +n,
            i = 0;
        return 0 !== t && isFinite(t) && (i = d(t)), i;
    }
    function sf(n, t, i) {
        for (var e = Math.min(n.length, t.length), o = Math.abs(n.length - t.length), u = 0, r = 0; r < e; r++) ((i && n[r] !== t[r]) || (!i && f(n[r]) !== f(t[r]))) && u++;
        return u + o;
    }
    function hf(n) {
        !1 === t.suppressDeprecationWarnings && "undefined" != typeof console && console.warn && console.warn("Deprecation warning: " + n);
    }
    function g(n, i) {
        var r = !0;
        return vt(function () {
            var u, e, f, o;
            if ((null != t.deprecationHandler && t.deprecationHandler(null, n), r)) {
                for (e = [], f = 0; f < arguments.length; f++) {
                    if (((u = ""), "object" == typeof arguments[f])) {
                        u += "\n[" + f + "] ";
                        for (o in arguments[0]) u += o + ": " + arguments[0][o] + ", ";
                        u = u.slice(0, -2);
                    } else u = arguments[f];
                    e.push(u);
                }
                hf(n + "\nArguments: " + Array.prototype.slice.call(e).join("") + "\n" + new Error().stack);
                r = !1;
            }
            return i.apply(this, arguments);
        }, i);
    }
    function cf(n, i) {
        null != t.deprecationHandler && t.deprecationHandler(n, i);
        ge[n] || (hf(i), (ge[n] = !0));
    }
    function et(n) {
        return n instanceof Function || "[object Function]" === Object.prototype.toString.call(n);
    }
    function lf(n, t) {
        var i,
            r = vt({}, n);
        for (i in t) l(t, i) && (hi(n[i]) && hi(t[i]) ? ((r[i] = {}), vt(r[i], n[i]), vt(r[i], t[i])) : null != t[i] ? (r[i] = t[i]) : delete r[i]);
        for (i in n) l(n, i) && !l(t, i) && hi(n[i]) && (r[i] = vt({}, r[i]));
        return r;
    }
    function kr(n) {
        null != n && this.set(n);
    }
    function w(n, t) {
        var i = n.toLowerCase();
        pi[i] = pi[i + "s"] = pi[t] = n;
    }
    function nt(n) {
        if ("string" == typeof n) return pi[n] || pi[n.toLowerCase()];
    }
    function dr(n) {
        var i,
            t,
            r = {};
        for (t in n) l(n, t) && (i = nt(t)) && (r[i] = n[t]);
        return r;
    }
    function b(n, t) {
        to[n] = t;
    }
    function ht(n, t, i) {
        var r = "" + Math.abs(n),
            u = t - r.length;
        return (n >= 0 ? (i ? "+" : "") : "-") + Math.pow(10, Math.max(0, u)).toString().substr(1) + r;
    }
    function r(n, t, i, r) {
        var u = r;
        "string" == typeof r &&
            (u = function () {
                return this[r]();
            });
        n && (si[n] = u);
        t &&
            (si[t[0]] = function () {
                return ht(u.apply(this, arguments), t[1], t[2]);
            });
        i &&
            (si[i] = function () {
                return this.localeData().ordinal(u.apply(this, arguments), n);
            });
    }
    function go(n) {
        return n.match(/\[[\s\S]/) ? n.replace(/^\[|\]$/g, "") : n.replace(/\\/g, "");
    }
    function gr(n, t) {
        return n.isValid()
            ? ((t = af(t, n.localeData())),
              (bu[t] =
                  bu[t] ||
                  (function (n) {
                      for (var t = n.match(io), i = 0, r = t.length; i < r; i++) t[i] = si[t[i]] ? si[t[i]] : go(t[i]);
                      return function (i) {
                          for (var f = "", u = 0; u < r; u++) f += et(t[u]) ? t[u].call(i, n) : t[u];
                          return f;
                      };
                  })(t)),
              bu[t](n))
            : n.localeData().invalidDate();
    }
    function af(n, t) {
        function r(n) {
            return t.longDateFormat(n) || n;
        }
        var i = 5;
        for (sr.lastIndex = 0; i >= 0 && sr.test(n); ) (n = n.replace(sr, r)), (sr.lastIndex = 0), (i -= 1);
        return n;
    }
    function i(n, t, i) {
        gu[n] = et(t)
            ? t
            : function (n) {
                  return n && i ? i : t;
              };
    }
    function ns(n, t) {
        return l(gu, n)
            ? gu[n](t._strict, t._locale)
            : new RegExp(
                  (function (n) {
                      return gt(
                          n.replace("\\", "").replace(/\\(\[)|\\(\])|\[([^\]\[]*)\]|\\(.)/g, function (n, t, i, r, u) {
                              return t || i || r || u;
                          })
                      );
                  })(n)
              );
    }
    function gt(n) {
        return n.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&");
    }
    function s(n, t) {
        var i,
            r = t;
        for (
            "string" == typeof n && (n = [n]),
                dt(t) &&
                    (r = function (n, i) {
                        i[t] = f(n);
                    }),
                i = 0;
            i < n.length;
            i++
        )
            nf[n[i]] = r;
    }
    function li(n, t) {
        s(n, function (n, i, r, u) {
            r._w = r._w || {};
            t(n, r._w, r, u);
        });
    }
    function ts(n, t, i) {
        null != t && l(nf, n) && nf[n](t, i._a, i, n);
    }
    function ai(n) {
        return nr(n) ? 366 : 365;
    }
    function nr(n) {
        return (n % 4 == 0 && n % 100 != 0) || n % 400 == 0;
    }
    function ui(n, i) {
        return function (r) {
            return null != r ? (vf(this, n, r), t.updateOffset(this, i), this) : tr(this, n);
        };
    }
    function tr(n, t) {
        return n.isValid() ? n._d["get" + (n._isUTC ? "UTC" : "") + t]() : NaN;
    }
    function vf(n, t, i) {
        n.isValid() && !isNaN(i) && ("FullYear" === t && nr(n.year()) && 1 === n.month() && 29 === n.date() ? n._d["set" + (n._isUTC ? "UTC" : "") + t](i, n.month(), ir(i, n.month())) : n._d["set" + (n._isUTC ? "UTC" : "") + t](i));
    }
    function ir(n, t) {
        if (isNaN(n) || isNaN(t)) return NaN;
        var i = (function (n, t) {
            return ((n % t) + t) % t;
        })(t, 12);
        return (n += (t - i) / 12), 1 === i ? (nr(n) ? 29 : 28) : 31 - ((i % 7) % 2);
    }
    function yf(n, t) {
        var i;
        if (!n.isValid()) return n;
        if ("string" == typeof t)
            if (/^\d+$/.test(t)) t = f(t);
            else if (((t = n.localeData().monthsParse(t)), !dt(t))) return n;
        return (i = Math.min(n.date(), ir(n.year(), t))), n._d["set" + (n._isUTC ? "UTC" : "") + "Month"](t, i), n;
    }
    function pf(n) {
        return null != n ? (yf(this, n), t.updateOffset(this, !0), this) : tr(this, "Month");
    }
    function wf() {
        function f(n, t) {
            return t.length - n.length;
        }
        for (var i, r = [], u = [], t = [], n = 0; n < 12; n++) (i = ft([2e3, n])), r.push(this.monthsShort(i, "")), u.push(this.months(i, "")), t.push(this.months(i, "")), t.push(this.monthsShort(i, ""));
        for (r.sort(f), u.sort(f), t.sort(f), n = 0; n < 12; n++) (r[n] = gt(r[n])), (u[n] = gt(u[n]));
        for (n = 0; n < 24; n++) t[n] = gt(t[n]);
        this._monthsRegex = new RegExp("^(" + t.join("|") + ")", "i");
        this._monthsShortRegex = this._monthsRegex;
        this._monthsStrictRegex = new RegExp("^(" + u.join("|") + ")", "i");
        this._monthsShortStrictRegex = new RegExp("^(" + r.join("|") + ")", "i");
    }
    function vi(n) {
        var t = new Date(Date.UTC.apply(null, arguments));
        return n < 100 && n >= 0 && isFinite(t.getUTCFullYear()) && t.setUTCFullYear(n), t;
    }
    function rr(n, t, i) {
        var r = 7 + t - i;
        return -((7 + vi(n, 0, r).getUTCDay() - t) % 7) + r - 1;
    }
    function bf(n, t, i, r, u) {
        var e,
            o,
            f = 1 + 7 * (t - 1) + ((7 + i - r) % 7) + rr(n, r, u);
        return f <= 0 ? (o = ai((e = n - 1)) + f) : f > ai(n) ? ((e = n + 1), (o = f - ai(n))) : ((e = n), (o = f)), { year: e, dayOfYear: o };
    }
    function yi(n, t, i) {
        var u,
            f,
            e = rr(n.year(), t, i),
            r = Math.floor((n.dayOfYear() - e - 1) / 7) + 1;
        return r < 1 ? (u = r + ni((f = n.year() - 1), t, i)) : r > ni(n.year(), t, i) ? ((u = r - ni(n.year(), t, i)), (f = n.year() + 1)) : ((f = n.year()), (u = r)), { week: u, year: f };
    }
    function ni(n, t, i) {
        var r = rr(n, t, i),
            u = rr(n + 1, t, i);
        return (ai(n) - r + u) / 7;
    }
    function nu() {
        function u(n, t) {
            return t.length - n.length;
        }
        for (var f, e, o, s, h = [], i = [], r = [], t = [], n = 0; n < 7; n++)
            (f = ft([2e3, 1]).day(n)), (e = this.weekdaysMin(f, "")), (o = this.weekdaysShort(f, "")), (s = this.weekdays(f, "")), h.push(e), i.push(o), r.push(s), t.push(e), t.push(o), t.push(s);
        for (h.sort(u), i.sort(u), r.sort(u), t.sort(u), n = 0; n < 7; n++) (i[n] = gt(i[n])), (r[n] = gt(r[n])), (t[n] = gt(t[n]));
        this._weekdaysRegex = new RegExp("^(" + t.join("|") + ")", "i");
        this._weekdaysShortRegex = this._weekdaysRegex;
        this._weekdaysMinRegex = this._weekdaysRegex;
        this._weekdaysStrictRegex = new RegExp("^(" + r.join("|") + ")", "i");
        this._weekdaysShortStrictRegex = new RegExp("^(" + i.join("|") + ")", "i");
        this._weekdaysMinStrictRegex = new RegExp("^(" + h.join("|") + ")", "i");
    }
    function tu() {
        return this.hours() % 12 || 12;
    }
    function kf(n, t) {
        r(n, 0, 0, function () {
            return this.localeData().meridiem(this.hours(), this.minutes(), t);
        });
    }
    function df(n, t) {
        return t._meridiemParse;
    }
    function gf(n) {
        return n ? n.toLowerCase().replace("_", "-") : n;
    }
    function iu(n) {
        var t = null;
        if (!y[n] && "undefined" != typeof module && module && module.exports)
            try {
                t = yr._abbr;
                require("./locale/" + n);
                fi(t);
            } catch (n) {}
        return y[n];
    }
    function fi(n, t) {
        var i;
        return n && (i = p(t) ? pt(n) : ru(n, t)) && (yr = i), yr._abbr;
    }
    function ru(n, t) {
        if (null !== t) {
            var i = co;
            if (((t.abbr = n), null != y[n]))
                cf(
                    "defineLocaleOverride",
                    "use moment.updateLocale(localeName, config) to change an existing locale. moment.defineLocale(localeName, config) should only be used for creating a new locale See http://momentjs.com/guides/#/warnings/define-locale/ for more info."
                ),
                    (i = y[n]._config);
            else if (null != t.parentLocale) {
                if (null == y[t.parentLocale]) return bi[t.parentLocale] || (bi[t.parentLocale] = []), bi[t.parentLocale].push({ name: n, config: t }), null;
                i = y[t.parentLocale]._config;
            }
            return (
                (y[n] = new kr(lf(i, t))),
                bi[n] &&
                    bi[n].forEach(function (n) {
                        ru(n.name, n.config);
                    }),
                fi(n),
                y[n]
            );
        }
        return delete y[n], null;
    }
    function pt(n) {
        var t;
        if ((n && n._locale && n._locale._abbr && (n = n._locale._abbr), !n)) return yr;
        if (!tt(n)) {
            if ((t = iu(n))) return t;
            n = [n];
        }
        return (function (n) {
            for (var t, i, f, u, r = 0; r < n.length; ) {
                for (t = (u = gf(n[r]).split("-")).length, i = (i = gf(n[r + 1])) ? i.split("-") : null; t > 0; ) {
                    if ((f = iu(u.slice(0, t).join("-")))) return f;
                    if (i && i.length >= t && sf(u, i, !0) >= t - 1) break;
                    t--;
                }
                r++;
            }
            return null;
        })(n);
    }
    function uu(n) {
        var i,
            t = n._a;
        return (
            t &&
                -2 === u(n).overflow &&
                ((i =
                    t[ct] < 0 || t[ct] > 11
                        ? ct
                        : t[ot] < 1 || t[ot] > ir(t[rt], t[ct])
                        ? ot
                        : t[v] < 0 || t[v] > 24 || (24 === t[v] && (0 !== t[ut] || 0 !== t[lt] || 0 !== t[ri]))
                        ? v
                        : t[ut] < 0 || t[ut] > 59
                        ? ut
                        : t[lt] < 0 || t[lt] > 59
                        ? lt
                        : t[ri] < 0 || t[ri] > 999
                        ? ri
                        : -1),
                u(n)._overflowDayOfYear && (i < rt || i > ot) && (i = ot),
                u(n)._overflowWeeks && -1 === i && (i = fs),
                u(n)._overflowWeekday && -1 === i && (i = es),
                (u(n).overflow = i)),
            n
        );
    }
    function ei(n, t, i) {
        return null != n ? n : null != t ? t : i;
    }
    function fu(n) {
        var i,
            r,
            f,
            e,
            o = [];
        if (!n._d) {
            for (
                f = (function (n) {
                    var i = new Date(t.now());
                    return n._useUTC ? [i.getUTCFullYear(), i.getUTCMonth(), i.getUTCDate()] : [i.getFullYear(), i.getMonth(), i.getDate()];
                })(n),
                    n._w &&
                        null == n._a[ot] &&
                        null == n._a[ct] &&
                        (function (n) {
                            var t, o, f, i, r, e, h, s, l;
                            null != (t = n._w).GG || null != t.W || null != t.E
                                ? ((r = 1), (e = 4), (o = ei(t.GG, n._a[rt], yi(c(), 1, 4).year)), (f = ei(t.W, 1)), ((i = ei(t.E, 1)) < 1 || i > 7) && (s = !0))
                                : ((r = n._locale._week.dow),
                                  (e = n._locale._week.doy),
                                  (l = yi(c(), r, e)),
                                  (o = ei(t.gg, n._a[rt], l.year)),
                                  (f = ei(t.w, l.week)),
                                  null != t.d ? ((i = t.d) < 0 || i > 6) && (s = !0) : null != t.e ? ((i = t.e + r), (t.e < 0 || t.e > 6) && (s = !0)) : (i = r));
                            f < 1 || f > ni(o, r, e) ? (u(n)._overflowWeeks = !0) : null != s ? (u(n)._overflowWeekday = !0) : ((h = bf(o, f, i, r, e)), (n._a[rt] = h.year), (n._dayOfYear = h.dayOfYear));
                        })(n),
                    null != n._dayOfYear &&
                        ((e = ei(n._a[rt], f[rt])), (n._dayOfYear > ai(e) || 0 === n._dayOfYear) && (u(n)._overflowDayOfYear = !0), (r = vi(e, 0, n._dayOfYear)), (n._a[ct] = r.getUTCMonth()), (n._a[ot] = r.getUTCDate())),
                    i = 0;
                i < 3 && null == n._a[i];
                ++i
            )
                n._a[i] = o[i] = f[i];
            for (; i < 7; i++) n._a[i] = o[i] = null == n._a[i] ? (2 === i ? 1 : 0) : n._a[i];
            24 === n._a[v] && 0 === n._a[ut] && 0 === n._a[lt] && 0 === n._a[ri] && ((n._nextDay = !0), (n._a[v] = 0));
            n._d = (n._useUTC
                ? vi
                : function (n, t, i, r, u, f, e) {
                      var o = new Date(n, t, i, r, u, f, e);
                      return n < 100 && n >= 0 && isFinite(o.getFullYear()) && o.setFullYear(n), o;
                  }
            ).apply(null, o);
            null != n._tzm && n._d.setUTCMinutes(n._d.getUTCMinutes() - n._tzm);
            n._nextDay && (n._a[v] = 24);
            n._w && void 0 !== n._w.d && n._w.d !== n._d.getDay() && (u(n).weekdayMismatch = !0);
        }
    }
    function ne(n) {
        var t,
            r,
            o,
            e,
            f,
            s,
            h = n._i,
            i = ws.exec(h) || bs.exec(h);
        if (i) {
            for (u(n).iso = !0, t = 0, r = pr.length; t < r; t++)
                if (pr[t][1].exec(i[1])) {
                    e = pr[t][0];
                    o = !1 !== pr[t][2];
                    break;
                }
            if (null == e) return void (n._isValid = !1);
            if (i[3]) {
                for (t = 0, r = rf.length; t < r; t++)
                    if (rf[t][1].exec(i[3])) {
                        f = (i[2] || " ") + rf[t][0];
                        break;
                    }
                if (null == f) return void (n._isValid = !1);
            }
            if (!o && null != f) return void (n._isValid = !1);
            if (i[4]) {
                if (!ks.exec(i[4])) return void (n._isValid = !1);
                s = "Z";
            }
            n._f = e + (f || "") + (s || "");
            eu(n);
        } else n._isValid = !1;
    }
    function is(n, t, i, r, u, f) {
        var e = [
            (function (n) {
                var t = parseInt(n, 10);
                return t <= 49 ? 2e3 + t : t <= 999 ? 1900 + t : t;
            })(n),
            so.indexOf(t),
            parseInt(i, 10),
            parseInt(r, 10),
            parseInt(u, 10),
        ];
        return f && e.push(parseInt(f, 10)), e;
    }
    function te(n) {
        var t = gs.exec(
                (function (n) {
                    return n
                        .replace(/\([^)]*\)|[\n\t]/g, " ")
                        .replace(/(\s\s+)/g, " ")
                        .trim();
                })(n._i)
            ),
            i;
        if (t) {
            if (
                ((i = is(t[4], t[3], t[2], t[5], t[6], t[7])),
                !(function (n, t, i) {
                    return n && ho.indexOf(n) !== new Date(t[0], t[1], t[2]).getDay() ? ((u(i).weekdayMismatch = !0), (i._isValid = !1), !1) : !0;
                })(t[1], i, n))
            )
                return;
            n._a = i;
            n._tzm = (function (n, t, i) {
                if (n) return nh[n];
                if (t) return 0;
                var r = parseInt(i, 10),
                    u = r % 100;
                return ((r - u) / 100) * 60 + u;
            })(t[8], t[9], t[10]);
            n._d = vi.apply(null, n._a);
            n._d.setUTCMinutes(n._d.getUTCMinutes() - n._tzm);
            u(n).rfc2822 = !0;
        } else n._isValid = !1;
    }
    function eu(n) {
        if (n._f !== t.ISO_8601)
            if (n._f !== t.RFC_2822) {
                n._a = [];
                u(n).empty = !0;
                for (var r, f, s, i = "" + n._i, c = i.length, h = 0, o = af(n._f, n._locale).match(io) || [], e = 0; e < o.length; e++)
                    (f = o[e]),
                        (r = (i.match(ns(f, n)) || [])[0]) && ((s = i.substr(0, i.indexOf(r))).length > 0 && u(n).unusedInput.push(s), (i = i.slice(i.indexOf(r) + r.length)), (h += r.length)),
                        si[f] ? (r ? (u(n).empty = !1) : u(n).unusedTokens.push(f), ts(f, r, n)) : n._strict && !r && u(n).unusedTokens.push(f);
                u(n).charsLeftOver = c - h;
                i.length > 0 && u(n).unusedInput.push(i);
                n._a[v] <= 12 && !0 === u(n).bigHour && n._a[v] > 0 && (u(n).bigHour = void 0);
                u(n).parsedDateParts = n._a.slice(0);
                u(n).meridiem = n._meridiem;
                n._a[v] = (function (n, t, i) {
                    var r;
                    return null == i ? t : null != n.meridiemHour ? n.meridiemHour(t, i) : null != n.isPM ? ((r = n.isPM(i)) && t < 12 && (t += 12), r || 12 !== t || (t = 0), t) : t;
                })(n._locale, n._a[v], n._meridiem);
                fu(n);
                uu(n);
            } else te(n);
        else ne(n);
    }
    function ie(n) {
        var i = n._i,
            r = n._f;
        return (
            (n._locale = n._locale || pt(n._l)),
            null === i || (void 0 === r && "" === i)
                ? gi({ nullInput: !0 })
                : ("string" == typeof i && (n._i = i = n._locale.preparse(i)),
                  yt(i)
                      ? new ci(uu(i))
                      : (di(i)
                            ? (n._d = i)
                            : tt(r)
                            ? (function (n) {
                                  var t, e, f, r, i;
                                  if (0 === n._f.length) return (u(n).invalidFormat = !0), void (n._d = new Date(NaN));
                                  for (r = 0; r < n._f.length; r++)
                                      (i = 0),
                                          (t = br({}, n)),
                                          null != n._useUTC && (t._useUTC = n._useUTC),
                                          (t._f = n._f[r]),
                                          eu(t),
                                          wr(t) && ((i += u(t).charsLeftOver), (i += 10 * u(t).unusedTokens.length), (u(t).score = i), (null == f || i < f) && ((f = i), (e = t)));
                                  vt(n, e || t);
                              })(n)
                            : r
                            ? eu(n)
                            : (function (n) {
                                  var i = n._i;
                                  p(i)
                                      ? (n._d = new Date(t.now()))
                                      : di(i)
                                      ? (n._d = new Date(i.valueOf()))
                                      : "string" == typeof i
                                      ? (function (n) {
                                            var i = ds.exec(n._i);
                                            null === i ? (ne(n), !1 === n._isValid && (delete n._isValid, te(n), !1 === n._isValid && (delete n._isValid, t.createFromInputFallback(n)))) : (n._d = new Date(+i[1]));
                                        })(n)
                                      : tt(i)
                                      ? ((n._a = of(i.slice(0), function (n) {
                                            return parseInt(n, 10);
                                        })),
                                        fu(n))
                                      : hi(i)
                                      ? (function (n) {
                                            if (!n._d) {
                                                var t = dr(n._i);
                                                n._a = of([t.year, t.month, t.day || t.date, t.hour, t.minute, t.second, t.millisecond], function (n) {
                                                    return n && parseInt(n, 10);
                                                });
                                                fu(n);
                                            }
                                        })(n)
                                      : dt(i)
                                      ? (n._d = new Date(i))
                                      : t.createFromInputFallback(n);
                              })(n),
                        wr(n) || (n._d = null),
                        n))
        );
    }
    function re(n, t, i, r, u) {
        var f = {};
        return (
            (!0 !== i && !1 !== i) || ((r = i), (i = void 0)),
            ((hi(n) &&
                (function (n) {
                    if (Object.getOwnPropertyNames) return 0 === Object.getOwnPropertyNames(n).length;
                    for (var t in n) if (n.hasOwnProperty(t)) return !1;
                    return !0;
                })(n)) ||
                (tt(n) && 0 === n.length)) &&
                (n = void 0),
            (f._isAMomentObject = !0),
            (f._useUTC = f._isUTC = u),
            (f._l = i),
            (f._i = n),
            (f._f = t),
            (f._strict = r),
            (function (n) {
                var t = new ci(uu(ie(n)));
                return t._nextDay && (t.add(1, "d"), (t._nextDay = void 0)), t;
            })(f)
        );
    }
    function c(n, t, i, r) {
        return re(n, t, i, r, !1);
    }
    function ue(n, t) {
        var r, i;
        if ((1 === t.length && tt(t[0]) && (t = t[0]), !t.length)) return c();
        for (r = t[0], i = 1; i < t.length; ++i) (t[i].isValid() && !t[i][n](r)) || (r = t[i]);
        return r;
    }
    function ur(n) {
        var t = dr(n),
            i = t.year || 0,
            r = t.quarter || 0,
            u = t.month || 0,
            e = t.week || 0,
            o = t.day || 0,
            s = t.hour || 0,
            h = t.minute || 0,
            c = t.second || 0,
            l = t.millisecond || 0;
        this._isValid = (function (n) {
            var i, r, t;
            for (i in n) if (-1 === a.call(ki, i) || (null != n[i] && isNaN(n[i]))) return !1;
            for (r = !1, t = 0; t < ki.length; ++t)
                if (n[ki[t]]) {
                    if (r) return !1;
                    parseFloat(n[ki[t]]) !== f(n[ki[t]]) && (r = !0);
                }
            return !0;
        })(t);
        this._milliseconds = +l + 1e3 * c + 6e4 * h + 36e5 * s;
        this._days = +o + 7 * e;
        this._months = +u + 3 * r + 12 * i;
        this._data = {};
        this._locale = pt();
        this._bubble();
    }
    function ou(n) {
        return n instanceof ur;
    }
    function su(n) {
        return n < 0 ? -1 * Math.round(-1 * n) : Math.round(n);
    }
    function fe(n, t) {
        r(n, 0, 0, function () {
            var n = this.utcOffset(),
                i = "+";
            return n < 0 && ((n = -n), (i = "-")), i + ht(~~(n / 60), 2) + t + ht(~~n % 60, 2);
        });
    }
    function hu(n, t) {
        var u = (t || "").match(n),
            i,
            r;
        return null === u ? null : ((i = ((u[u.length - 1] || []) + "").match(lo) || ["-", 0, 0]), (r = 60 * i[1] + f(i[2])), 0 === r ? 0 : "+" === i[0] ? r : -r);
    }
    function cu(n, i) {
        var r, u;
        return i._isUTC ? ((r = i.clone()), (u = (yt(n) || di(n) ? n.valueOf() : c(n).valueOf()) - r.valueOf()), r._d.setTime(r._d.valueOf() + u), t.updateOffset(r, !1), r) : c(n).local();
    }
    function lu(n) {
        return 15 * -Math.round(n._d.getTimezoneOffset() / 15);
    }
    function ee() {
        return !!this.isValid() && this._isUTC && 0 === this._offset;
    }
    function it(n, t) {
        var u,
            e,
            o,
            r = n,
            i = null;
        return (
            ou(n)
                ? (r = { ms: n._milliseconds, d: n._days, M: n._months })
                : dt(n)
                ? ((r = {}), t ? (r[t] = n) : (r.milliseconds = n))
                : (i = ao.exec(n))
                ? ((u = "-" === i[1] ? -1 : 1), (r = { y: 0, d: f(i[ot]) * u, h: f(i[v]) * u, m: f(i[ut]) * u, s: f(i[lt]) * u, ms: f(su(1e3 * i[ri])) * u }))
                : (i = vo.exec(n))
                ? ((u = "-" === i[1] ? -1 : (i[1], 1)), (r = { y: ti(i[2], u), M: ti(i[3], u), w: ti(i[4], u), d: ti(i[5], u), h: ti(i[6], u), m: ti(i[7], u), s: ti(i[8], u) }))
                : null == r
                ? (r = {})
                : "object" == typeof r &&
                  ("from" in r || "to" in r) &&
                  ((o = (function (n, t) {
                      var i;
                      return !n.isValid() || !t.isValid() ? { milliseconds: 0, months: 0 } : ((t = cu(t, n)), n.isBefore(t) ? (i = oe(n, t)) : (((i = oe(t, n)).milliseconds = -i.milliseconds), (i.months = -i.months)), i);
                  })(c(r.from), c(r.to))),
                  ((r = {}).ms = o.milliseconds),
                  (r.M = o.months)),
            (e = new ur(r)),
            ou(n) && l(n, "_locale") && (e._locale = n._locale),
            e
        );
    }
    function ti(n, t) {
        var i = n && parseFloat(n.replace(",", "."));
        return (isNaN(i) ? 0 : i) * t;
    }
    function oe(n, t) {
        var i = { milliseconds: 0, months: 0 };
        return (i.months = t.month() - n.month() + 12 * (t.year() - n.year())), n.clone().add(i.months, "M").isAfter(t) && --i.months, (i.milliseconds = +t - +n.clone().add(i.months, "M")), i;
    }
    function se(n, t) {
        return function (i, r) {
            var u, f;
            return (
                null === r ||
                    isNaN(+r) ||
                    (cf(t, "moment()." + t + "(period, number) is deprecated. Please use moment()." + t + "(number, period). See http://momentjs.com/guides/#/warnings/add-inverted-param/ for more info."), (f = i), (i = r), (r = f)),
                (i = "string" == typeof i ? +i : i),
                (u = it(i, r)),
                he(this, u, n),
                this
            );
        };
    }
    function he(n, i, r, u) {
        var o = i._milliseconds,
            f = su(i._days),
            e = su(i._months);
        n.isValid() && ((u = null == u || u), e && yf(n, tr(n, "Month") + e * r), f && vf(n, "Date", tr(n, "Date") + f * r), o && n._d.setTime(n._d.valueOf() + o * r), u && t.updateOffset(n, f || e));
    }
    function au(n, t) {
        var u,
            r = 12 * (t.year() - n.year()) + (t.month() - n.month()),
            i = n.clone().add(r, "months");
        return (u = t - i < 0 ? (t - i) / (i - n.clone().add(r - 1, "months")) : (t - i) / (n.clone().add(r + 1, "months") - i)), -(r + u) || 0;
    }
    function ce(n) {
        var t;
        return void 0 === n ? this._locale._abbr : (null != (t = pt(n)) && (this._locale = t), this);
    }
    function le() {
        return this._locale;
    }
    function fr(n, t) {
        r(0, [n, n.length], 0, t);
    }
    function ae(n, t, i, r, u) {
        var f;
        return null == n
            ? yi(this, r, u).year
            : ((f = ni(n, r, u)),
              t > f && (t = f),
              function (n, t, i, r, u) {
                  var e = bf(n, t, i, r, u),
                      f = vi(e.year, 0, e.dayOfYear);
                  return this.year(f.getUTCFullYear()), this.month(f.getUTCMonth()), this.date(f.getUTCDate()), this;
              }.call(this, n, t, i, r, u));
    }
    function rs(n, t) {
        t[ri] = f(1e3 * ("0." + n));
    }
    function ve(n) {
        return n;
    }
    function er(n, t, i, r) {
        var u = pt(),
            f = ft().set(r, t);
        return u[i](f, n);
    }
    function ye(n, t, i) {
        if ((dt(n) && ((t = n), (n = void 0)), (n = n || ""), null != t)) return er(n, t, i, "month");
        for (var u = [], r = 0; r < 12; r++) u[r] = er(n, r, i, "month");
        return u;
    }
    function vu(n, t, i, r) {
        var o, f, u, e;
        if (("boolean" == typeof n ? (dt(t) && ((i = t), (t = void 0)), (t = t || "")) : ((i = t = n), (n = !1), dt(t) && ((i = t), (t = void 0)), (t = t || "")), (o = pt()), (f = n ? o._week.dow : 0), null != i))
            return er(t, (i + f) % 7, r, "day");
        for (e = [], u = 0; u < 7; u++) e[u] = er(t, (u + f) % 7, r, "day");
        return e;
    }
    function pe(n, t, i, r) {
        var u = it(t, i);
        return (n._milliseconds += r * u._milliseconds), (n._days += r * u._days), (n._months += r * u._months), n._bubble();
    }
    function we(n) {
        return n < 0 ? Math.floor(n) : Math.ceil(n);
    }
    function be(n) {
        return (4800 * n) / 146097;
    }
    function yu(n) {
        return (146097 * n) / 4800;
    }
    function wt(n) {
        return function () {
            return this.as(n);
        };
    }
    function ii(n) {
        return function () {
            return this.isValid() ? this._data[n] : NaN;
        };
    }
    function oi(n) {
        return (n > 0) - (n < 0) || +n;
    }
    function or() {
        if (!this.isValid()) return this.localeData().invalidDate();
        var i,
            o,
            v,
            t = ef(this._milliseconds) / 1e3,
            y = ef(this._days),
            s = ef(this._months);
        o = d((i = d(t / 60)) / 60);
        t %= 60;
        i %= 60;
        var h = (v = d(s / 12)),
            c = (s %= 12),
            l = y,
            r = o,
            u = i,
            f = t ? t.toFixed(3).replace(/\.?0+$/, "") : "",
            n = this.asSeconds();
        if (!n) return "P0D";
        var p = n < 0 ? "-" : "",
            a = oi(this._months) !== oi(n) ? "-" : "",
            w = oi(this._days) !== oi(n) ? "-" : "",
            e = oi(this._milliseconds) !== oi(n) ? "-" : "";
        return p + "P" + (h ? a + h + "Y" : "") + (c ? a + c + "M" : "") + (l ? w + l + "D" : "") + (r || u || f ? "T" : "") + (r ? e + r + "H" : "") + (u ? e + u + "M" : "") + (f ? e + f + "S" : "");
    }
    var ke, de, no, a, tf, lo, ao, vo, yo, po, uf, ff, wo, bo, bt, ko, n, o;
    de = Array.prototype.some
        ? Array.prototype.some
        : function (n) {
              for (var i = Object(this), r = i.length >>> 0, t = 0; t < r; t++) if (t in i && n.call(this, i[t], t, i)) return !0;
              return !1;
          };
    var pu = (t.momentProperties = []),
        wu = !1,
        ge = {};
    t.suppressDeprecationWarnings = !1;
    t.deprecationHandler = null;
    no = Object.keys
        ? Object.keys
        : function (n) {
              var t,
                  i = [];
              for (t in n) l(n, t) && i.push(t);
              return i;
          };
    var pi = {},
        to = {},
        io = /(\[[^\[]*\])|(\\)?([Hh]mm(ss)?|Mo|MM?M?M?|Do|DDDo|DD?D?D?|ddd?d?|do?|w[o|w]?|W[o|W]?|Qo?|YYYYYY|YYYYY|YYYY|YY|gg(ggg?)?|GG(GGG?)?|e|E|a|A|hh?|HH?|kk?|mm?|ss?|S{1,9}|x|X|zz?|ZZ?|.)/g,
        sr = /(\[[^\[]*\])|(\\)?(LTS|LT|LL?L?L?|l{1,4})/g,
        bu = {},
        si = {},
        ro = /\d/,
        k = /\d\d/,
        uo = /\d{3}/,
        ku = /\d{4}/,
        hr = /[+-]?\d{6}/,
        h = /\d\d?/,
        fo = /\d\d\d\d?/,
        eo = /\d\d\d\d\d\d?/,
        cr = /\d{1,3}/,
        du = /\d{1,4}/,
        lr = /[+-]?\d{1,6}/,
        ar = /[+-]?\d+/,
        us = /Z|[+-]\d\d:?\d\d/gi,
        vr = /Z|[+-]\d\d(?::?\d\d)?/gi,
        wi = /[0-9]{0,256}['a-z\u00A0-\u05FF\u0700-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]{1,256}|[\u0600-\u06FF\/]{1,256}(\s*?[\u0600-\u06FF]{1,256}){1,2}/i,
        gu = {},
        nf = {},
        rt = 0,
        ct = 1,
        ot = 2,
        v = 3,
        ut = 4,
        lt = 5,
        ri = 6,
        fs = 7,
        es = 8;
    r("Y", 0, 0, function () {
        var n = this.year();
        return n <= 9999 ? "" + n : "+" + n;
    });
    r(0, ["YY", 2], 0, function () {
        return this.year() % 100;
    });
    r(0, ["YYYY", 4], 0, "year");
    r(0, ["YYYYY", 5], 0, "year");
    r(0, ["YYYYYY", 6, !0], 0, "year");
    w("year", "y");
    b("year", 1);
    i("Y", ar);
    i("YY", h, k);
    i("YYYY", du, ku);
    i("YYYYY", lr, hr);
    i("YYYYYY", lr, hr);
    s(["YYYYY", "YYYYYY"], rt);
    s("YYYY", function (n, i) {
        i[rt] = 2 === n.length ? t.parseTwoDigitYear(n) : f(n);
    });
    s("YY", function (n, i) {
        i[rt] = t.parseTwoDigitYear(n);
    });
    s("Y", function (n, t) {
        t[rt] = parseInt(n, 10);
    });
    t.parseTwoDigitYear = function (n) {
        return f(n) + (f(n) > 68 ? 1900 : 2e3);
    };
    tf = ui("FullYear", !0);
    a = Array.prototype.indexOf
        ? Array.prototype.indexOf
        : function (n) {
              for (var t = 0; t < this.length; ++t) if (this[t] === n) return t;
              return -1;
          };
    r("M", ["MM", 2], "Mo", function () {
        return this.month() + 1;
    });
    r("MMM", 0, 0, function (n) {
        return this.localeData().monthsShort(this, n);
    });
    r("MMMM", 0, 0, function (n) {
        return this.localeData().months(this, n);
    });
    w("month", "M");
    b("month", 8);
    i("M", h);
    i("MM", h, k);
    i("MMM", function (n, t) {
        return t.monthsShortRegex(n);
    });
    i("MMMM", function (n, t) {
        return t.monthsRegex(n);
    });
    s(["M", "MM"], function (n, t) {
        t[ct] = f(n) - 1;
    });
    s(["MMM", "MMMM"], function (n, t, i, r) {
        var f = i._locale.monthsParse(n, r, i._strict);
        null != f ? (t[ct] = f) : (u(i).invalidMonth = n);
    });
    var oo = /D[oD]?(\[[^\[\]]*\]|\s)+MMMM?/,
        os = "January_February_March_April_May_June_July_August_September_October_November_December".split("_"),
        so = "Jan_Feb_Mar_Apr_May_Jun_Jul_Aug_Sep_Oct_Nov_Dec".split("_"),
        ss = wi,
        hs = wi;
    r("w", ["ww", 2], "wo", "week");
    r("W", ["WW", 2], "Wo", "isoWeek");
    w("week", "w");
    w("isoWeek", "W");
    b("week", 5);
    b("isoWeek", 5);
    i("w", h);
    i("ww", h, k);
    i("W", h);
    i("WW", h, k);
    li(["w", "ww", "W", "WW"], function (n, t, i, r) {
        t[r.substr(0, 1)] = f(n);
    });
    r("d", 0, "do", "day");
    r("dd", 0, 0, function (n) {
        return this.localeData().weekdaysMin(this, n);
    });
    r("ddd", 0, 0, function (n) {
        return this.localeData().weekdaysShort(this, n);
    });
    r("dddd", 0, 0, function (n) {
        return this.localeData().weekdays(this, n);
    });
    r("e", 0, 0, "weekday");
    r("E", 0, 0, "isoWeekday");
    w("day", "d");
    w("weekday", "e");
    w("isoWeekday", "E");
    b("day", 11);
    b("weekday", 11);
    b("isoWeekday", 11);
    i("d", h);
    i("e", h);
    i("E", h);
    i("dd", function (n, t) {
        return t.weekdaysMinRegex(n);
    });
    i("ddd", function (n, t) {
        return t.weekdaysShortRegex(n);
    });
    i("dddd", function (n, t) {
        return t.weekdaysRegex(n);
    });
    li(["dd", "ddd", "dddd"], function (n, t, i, r) {
        var f = i._locale.weekdaysParse(n, r, i._strict);
        null != f ? (t.d = f) : (u(i).invalidWeekday = n);
    });
    li(["d", "e", "E"], function (n, t, i, r) {
        t[r] = f(n);
    });
    var cs = "Sunday_Monday_Tuesday_Wednesday_Thursday_Friday_Saturday".split("_"),
        ho = "Sun_Mon_Tue_Wed_Thu_Fri_Sat".split("_"),
        ls = "Su_Mo_Tu_We_Th_Fr_Sa".split("_"),
        as = wi,
        vs = wi,
        ys = wi;
    r("H", ["HH", 2], 0, "hour");
    r("h", ["hh", 2], 0, tu);
    r("k", ["kk", 2], 0, function () {
        return this.hours() || 24;
    });
    r("hmm", 0, 0, function () {
        return "" + tu.apply(this) + ht(this.minutes(), 2);
    });
    r("hmmss", 0, 0, function () {
        return "" + tu.apply(this) + ht(this.minutes(), 2) + ht(this.seconds(), 2);
    });
    r("Hmm", 0, 0, function () {
        return "" + this.hours() + ht(this.minutes(), 2);
    });
    r("Hmmss", 0, 0, function () {
        return "" + this.hours() + ht(this.minutes(), 2) + ht(this.seconds(), 2);
    });
    kf("a", !0);
    kf("A", !1);
    w("hour", "h");
    b("hour", 13);
    i("a", df);
    i("A", df);
    i("H", h);
    i("h", h);
    i("k", h);
    i("HH", h, k);
    i("hh", h, k);
    i("kk", h, k);
    i("hmm", fo);
    i("hmmss", eo);
    i("Hmm", fo);
    i("Hmmss", eo);
    s(["H", "HH"], v);
    s(["k", "kk"], function (n, t) {
        var i = f(n);
        t[v] = 24 === i ? 0 : i;
    });
    s(["a", "A"], function (n, t, i) {
        i._isPm = i._locale.isPM(n);
        i._meridiem = n;
    });
    s(["h", "hh"], function (n, t, i) {
        t[v] = f(n);
        u(i).bigHour = !0;
    });
    s("hmm", function (n, t, i) {
        var r = n.length - 2;
        t[v] = f(n.substr(0, r));
        t[ut] = f(n.substr(r));
        u(i).bigHour = !0;
    });
    s("hmmss", function (n, t, i) {
        var r = n.length - 4,
            e = n.length - 2;
        t[v] = f(n.substr(0, r));
        t[ut] = f(n.substr(r, 2));
        t[lt] = f(n.substr(e));
        u(i).bigHour = !0;
    });
    s("Hmm", function (n, t) {
        var i = n.length - 2;
        t[v] = f(n.substr(0, i));
        t[ut] = f(n.substr(i));
    });
    s("Hmmss", function (n, t) {
        var i = n.length - 4,
            r = n.length - 2;
        t[v] = f(n.substr(0, i));
        t[ut] = f(n.substr(i, 2));
        t[lt] = f(n.substr(r));
    });
    var yr,
        ps = ui("Hours", !0),
        co = {
            calendar: { sameDay: "[Today at] LT", nextDay: "[Tomorrow at] LT", nextWeek: "dddd [at] LT", lastDay: "[Yesterday at] LT", lastWeek: "[Last] dddd [at] LT", sameElse: "L" },
            longDateFormat: { LTS: "h:mm:ss A", LT: "h:mm A", L: "MM/DD/YYYY", LL: "MMMM D, YYYY", LLL: "MMMM D, YYYY h:mm A", LLLL: "dddd, MMMM D, YYYY h:mm A" },
            invalidDate: "Invalid date",
            ordinal: "%d",
            dayOfMonthOrdinalParse: /\d{1,2}/,
            relativeTime: {
                future: "in %s",
                past: "%s ago",
                s: "a few seconds",
                ss: "%d seconds",
                m: "a minute",
                mm: "%d minutes",
                h: "an hour",
                hh: "%d hours",
                d: "a day",
                dd: "%d days",
                M: "a month",
                MM: "%d months",
                y: "a year",
                yy: "%d years",
            },
            months: os,
            monthsShort: so,
            week: { dow: 0, doy: 6 },
            weekdays: cs,
            weekdaysMin: ls,
            weekdaysShort: ho,
            meridiemParse: /[ap]\.?m?\.?/i,
        },
        y = {},
        bi = {},
        ws = /^\s*((?:[+-]\d{6}|\d{4})-(?:\d\d-\d\d|W\d\d-\d|W\d\d|\d\d\d|\d\d))(?:(T| )(\d\d(?::\d\d(?::\d\d(?:[.,]\d+)?)?)?)([\+\-]\d\d(?::?\d\d)?|\s*Z)?)?$/,
        bs = /^\s*((?:[+-]\d{6}|\d{4})(?:\d\d\d\d|W\d\d\d|W\d\d|\d\d\d|\d\d))(?:(T| )(\d\d(?:\d\d(?:\d\d(?:[.,]\d+)?)?)?)([\+\-]\d\d(?::?\d\d)?|\s*Z)?)?$/,
        ks = /Z|[+-]\d\d(?::?\d\d)?/,
        pr = [
            ["YYYYYY-MM-DD", /[+-]\d{6}-\d\d-\d\d/],
            ["YYYY-MM-DD", /\d{4}-\d\d-\d\d/],
            ["GGGG-[W]WW-E", /\d{4}-W\d\d-\d/],
            ["GGGG-[W]WW", /\d{4}-W\d\d/, !1],
            ["YYYY-DDD", /\d{4}-\d{3}/],
            ["YYYY-MM", /\d{4}-\d\d/, !1],
            ["YYYYYYMMDD", /[+-]\d{10}/],
            ["YYYYMMDD", /\d{8}/],
            ["GGGG[W]WWE", /\d{4}W\d{3}/],
            ["GGGG[W]WW", /\d{4}W\d{2}/, !1],
            ["YYYYDDD", /\d{7}/],
        ],
        rf = [
            ["HH:mm:ss.SSSS", /\d\d:\d\d:\d\d\.\d+/],
            ["HH:mm:ss,SSSS", /\d\d:\d\d:\d\d,\d+/],
            ["HH:mm:ss", /\d\d:\d\d:\d\d/],
            ["HH:mm", /\d\d:\d\d/],
            ["HHmmss.SSSS", /\d\d\d\d\d\d\.\d+/],
            ["HHmmss,SSSS", /\d\d\d\d\d\d,\d+/],
            ["HHmmss", /\d\d\d\d\d\d/],
            ["HHmm", /\d\d\d\d/],
            ["HH", /\d\d/],
        ],
        ds = /^\/?Date\((\-?\d+)/i,
        gs = /^(?:(Mon|Tue|Wed|Thu|Fri|Sat|Sun),?\s)?(\d{1,2})\s(Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)\s(\d{2,4})\s(\d\d):(\d\d)(?::(\d\d))?\s(?:(UT|GMT|[ECMP][SD]T)|([Zz])|([+-]\d{4}))$/,
        nh = { UT: 0, GMT: 0, EDT: -240, EST: -300, CDT: -300, CST: -360, MDT: -360, MST: -420, PDT: -420, PST: -480 };
    t.createFromInputFallback = g(
        "value provided is not in a recognized RFC2822 or ISO format. moment construction falls back to js Date(), which is not reliable across all browsers and versions. Non RFC2822/ISO date formats are discouraged and will be removed in an upcoming major release. Please refer to http://momentjs.com/guides/#/warnings/js-date/ for more info.",
        function (n) {
            n._d = new Date(n._i + (n._useUTC ? " UTC" : ""));
        }
    );
    t.ISO_8601 = function () {};
    t.RFC_2822 = function () {};
    var th = g("moment().min is deprecated, use moment.max instead. http://momentjs.com/guides/#/warnings/min-max/", function () {
            var n = c.apply(null, arguments);
            return this.isValid() && n.isValid() ? (n < this ? this : n) : gi();
        }),
        ih = g("moment().max is deprecated, use moment.min instead. http://momentjs.com/guides/#/warnings/min-max/", function () {
            var n = c.apply(null, arguments);
            return this.isValid() && n.isValid() ? (n > this ? this : n) : gi();
        }),
        ki = ["year", "quarter", "month", "week", "day", "hour", "minute", "second", "millisecond"];
    for (
        fe("Z", ":"),
            fe("ZZ", ""),
            i("Z", vr),
            i("ZZ", vr),
            s(["Z", "ZZ"], function (n, t, i) {
                i._useUTC = !0;
                i._tzm = hu(vr, n);
            }),
            lo = /([\+\-]|\d\d)/gi,
            t.updateOffset = function () {},
            ao = /^(\-|\+)?(?:(\d*)[. ])?(\d+)\:(\d+)(?:\:(\d+)(\.\d*)?)?$/,
            vo = /^(-|\+)?P(?:([-+]?[0-9,.]*)Y)?(?:([-+]?[0-9,.]*)M)?(?:([-+]?[0-9,.]*)W)?(?:([-+]?[0-9,.]*)D)?(?:T(?:([-+]?[0-9,.]*)H)?(?:([-+]?[0-9,.]*)M)?(?:([-+]?[0-9,.]*)S)?)?$/,
            it.fn = ur.prototype,
            it.invalid = function () {
                return it(NaN);
            },
            yo = se(1, "add"),
            po = se(-1, "subtract"),
            t.defaultFormat = "YYYY-MM-DDTHH:mm:ssZ",
            t.defaultFormatUtc = "YYYY-MM-DDTHH:mm:ss[Z]",
            uf = g("moment().lang() is deprecated. Instead, use moment().localeData() to get the language configuration. Use moment().locale() to change languages.", function (n) {
                return void 0 === n ? this.localeData() : this.locale(n);
            }),
            r(0, ["gg", 2], 0, function () {
                return this.weekYear() % 100;
            }),
            r(0, ["GG", 2], 0, function () {
                return this.isoWeekYear() % 100;
            }),
            fr("gggg", "weekYear"),
            fr("ggggg", "weekYear"),
            fr("GGGG", "isoWeekYear"),
            fr("GGGGG", "isoWeekYear"),
            w("weekYear", "gg"),
            w("isoWeekYear", "GG"),
            b("weekYear", 1),
            b("isoWeekYear", 1),
            i("G", ar),
            i("g", ar),
            i("GG", h, k),
            i("gg", h, k),
            i("GGGG", du, ku),
            i("gggg", du, ku),
            i("GGGGG", lr, hr),
            i("ggggg", lr, hr),
            li(["gggg", "ggggg", "GGGG", "GGGGG"], function (n, t, i, r) {
                t[r.substr(0, 2)] = f(n);
            }),
            li(["gg", "GG"], function (n, i, r, u) {
                i[u] = t.parseTwoDigitYear(n);
            }),
            r("Q", 0, "Qo", "quarter"),
            w("quarter", "Q"),
            b("quarter", 7),
            i("Q", ro),
            s("Q", function (n, t) {
                t[ct] = 3 * (f(n) - 1);
            }),
            r("D", ["DD", 2], "Do", "date"),
            w("date", "D"),
            b("date", 9),
            i("D", h),
            i("DD", h, k),
            i("Do", function (n, t) {
                return n ? t._dayOfMonthOrdinalParse || t._ordinalParse : t._dayOfMonthOrdinalParseLenient;
            }),
            s(["D", "DD"], ot),
            s("Do", function (n, t) {
                t[ot] = f(n.match(h)[0]);
            }),
            ff = ui("Date", !0),
            r("DDD", ["DDDD", 3], "DDDo", "dayOfYear"),
            w("dayOfYear", "DDD"),
            b("dayOfYear", 4),
            i("DDD", cr),
            i("DDDD", uo),
            s(["DDD", "DDDD"], function (n, t, i) {
                i._dayOfYear = f(n);
            }),
            r("m", ["mm", 2], 0, "minute"),
            w("minute", "m"),
            b("minute", 14),
            i("m", h),
            i("mm", h, k),
            s(["m", "mm"], ut),
            wo = ui("Minutes", !1),
            r("s", ["ss", 2], 0, "second"),
            w("second", "s"),
            b("second", 15),
            i("s", h),
            i("ss", h, k),
            s(["s", "ss"], lt),
            bo = ui("Seconds", !1),
            r("S", 0, 0, function () {
                return ~~(this.millisecond() / 100);
            }),
            r(0, ["SS", 2], 0, function () {
                return ~~(this.millisecond() / 10);
            }),
            r(0, ["SSS", 3], 0, "millisecond"),
            r(0, ["SSSS", 4], 0, function () {
                return 10 * this.millisecond();
            }),
            r(0, ["SSSSS", 5], 0, function () {
                return 100 * this.millisecond();
            }),
            r(0, ["SSSSSS", 6], 0, function () {
                return 1e3 * this.millisecond();
            }),
            r(0, ["SSSSSSS", 7], 0, function () {
                return 1e4 * this.millisecond();
            }),
            r(0, ["SSSSSSSS", 8], 0, function () {
                return 1e5 * this.millisecond();
            }),
            r(0, ["SSSSSSSSS", 9], 0, function () {
                return 1e6 * this.millisecond();
            }),
            w("millisecond", "ms"),
            b("millisecond", 16),
            i("S", cr, ro),
            i("SS", cr, k),
            i("SSS", cr, uo),
            bt = "SSSS";
        bt.length <= 9;
        bt += "S"
    )
        i(bt, /\d+/);
    for (bt = "S"; bt.length <= 9; bt += "S") s(bt, rs);
    ko = ui("Milliseconds", !1);
    r("z", 0, 0, "zoneAbbr");
    r("zz", 0, 0, "zoneName");
    n = ci.prototype;
    n.add = yo;
    n.calendar = function (n, i) {
        var u = n || c(),
            f = cu(u, this).startOf("day"),
            r = t.calendarFormat(this, f) || "sameElse",
            e = i && (et(i[r]) ? i[r].call(this, u) : i[r]);
        return this.format(e || this.localeData().calendar(r, this, c(u)));
    };
    n.clone = function () {
        return new ci(this);
    };
    n.diff = function (n, t, i) {
        var r, f, u;
        if (!this.isValid()) return NaN;
        if (!(r = cu(n, this)).isValid()) return NaN;
        switch (((f = 6e4 * (r.utcOffset() - this.utcOffset())), (t = nt(t)))) {
            case "year":
                u = au(this, r) / 12;
                break;
            case "month":
                u = au(this, r);
                break;
            case "quarter":
                u = au(this, r) / 3;
                break;
            case "second":
                u = (this - r) / 1e3;
                break;
            case "minute":
                u = (this - r) / 6e4;
                break;
            case "hour":
                u = (this - r) / 36e5;
                break;
            case "day":
                u = (this - r - f) / 864e5;
                break;
            case "week":
                u = (this - r - f) / 6048e5;
                break;
            default:
                u = this - r;
        }
        return i ? u : d(u);
    };
    n.endOf = function (n) {
        return void 0 === (n = nt(n)) || "millisecond" === n
            ? this
            : ("date" === n && (n = "day"),
              this.startOf(n)
                  .add(1, "isoWeek" === n ? "week" : n)
                  .subtract(1, "ms"));
    };
    n.format = function (n) {
        n || (n = this.isUtc() ? t.defaultFormatUtc : t.defaultFormat);
        var i = gr(this, n);
        return this.localeData().postformat(i);
    };
    n.from = function (n, t) {
        return this.isValid() && ((yt(n) && n.isValid()) || c(n).isValid()) ? it({ to: this, from: n }).locale(this.locale()).humanize(!t) : this.localeData().invalidDate();
    };
    n.fromNow = function (n) {
        return this.from(c(), n);
    };
    n.to = function (n, t) {
        return this.isValid() && ((yt(n) && n.isValid()) || c(n).isValid()) ? it({ from: this, to: n }).locale(this.locale()).humanize(!t) : this.localeData().invalidDate();
    };
    n.toNow = function (n) {
        return this.to(c(), n);
    };
    n.get = function (n) {
        return (n = nt(n)), et(this[n]) ? this[n]() : this;
    };
    n.invalidAt = function () {
        return u(this).overflow;
    };
    n.isAfter = function (n, t) {
        var i = yt(n) ? n : c(n);
        return !(!this.isValid() || !i.isValid()) && ("millisecond" === (t = nt(p(t) ? "millisecond" : t)) ? this.valueOf() > i.valueOf() : i.valueOf() < this.clone().startOf(t).valueOf());
    };
    n.isBefore = function (n, t) {
        var i = yt(n) ? n : c(n);
        return !(!this.isValid() || !i.isValid()) && ("millisecond" === (t = nt(p(t) ? "millisecond" : t)) ? this.valueOf() < i.valueOf() : this.clone().endOf(t).valueOf() < i.valueOf());
    };
    n.isBetween = function (n, t, i, r) {
        return ("(" === (r = r || "()")[0] ? this.isAfter(n, i) : !this.isBefore(n, i)) && (")" === r[1] ? this.isBefore(t, i) : !this.isAfter(t, i));
    };
    n.isSame = function (n, t) {
        var i,
            r = yt(n) ? n : c(n);
        return !(!this.isValid() || !r.isValid()) && ("millisecond" === (t = nt(t || "millisecond")) ? this.valueOf() === r.valueOf() : ((i = r.valueOf()), this.clone().startOf(t).valueOf() <= i && i <= this.clone().endOf(t).valueOf()));
    };
    n.isSameOrAfter = function (n, t) {
        return this.isSame(n, t) || this.isAfter(n, t);
    };
    n.isSameOrBefore = function (n, t) {
        return this.isSame(n, t) || this.isBefore(n, t);
    };
    n.isValid = function () {
        return wr(this);
    };
    n.lang = uf;
    n.locale = ce;
    n.localeData = le;
    n.max = ih;
    n.min = th;
    n.parsingFlags = function () {
        return vt({}, u(this));
    };
    n.set = function (n, t) {
        if ("object" == typeof n)
            for (
                var r = (function (n) {
                        var t = [];
                        for (var i in n) t.push({ unit: i, priority: to[i] });
                        return (
                            t.sort(function (n, t) {
                                return n.priority - t.priority;
                            }),
                            t
                        );
                    })((n = dr(n))),
                    i = 0;
                i < r.length;
                i++
            )
                this[r[i].unit](n[r[i].unit]);
        else if (((n = nt(n)), et(this[n]))) return this[n](t);
        return this;
    };
    n.startOf = function (n) {
        switch ((n = nt(n))) {
            case "year":
                this.month(0);
            case "quarter":
            case "month":
                this.date(1);
            case "week":
            case "isoWeek":
            case "day":
            case "date":
                this.hours(0);
            case "hour":
                this.minutes(0);
            case "minute":
                this.seconds(0);
            case "second":
                this.milliseconds(0);
        }
        return "week" === n && this.weekday(0), "isoWeek" === n && this.isoWeekday(1), "quarter" === n && this.month(3 * Math.floor(this.month() / 3)), this;
    };
    n.subtract = po;
    n.toArray = function () {
        return [this.year(), this.month(), this.date(), this.hour(), this.minute(), this.second(), this.millisecond()];
    };
    n.toObject = function () {
        return { years: this.year(), months: this.month(), date: this.date(), hours: this.hours(), minutes: this.minutes(), seconds: this.seconds(), milliseconds: this.milliseconds() };
    };
    n.toDate = function () {
        return new Date(this.valueOf());
    };
    n.toISOString = function () {
        if (!this.isValid()) return null;
        var n = this.clone().utc();
        return n.year() < 0 || n.year() > 9999 ? gr(n, "YYYYYY-MM-DD[T]HH:mm:ss.SSS[Z]") : et(Date.prototype.toISOString) ? this.toDate().toISOString() : gr(n, "YYYY-MM-DD[T]HH:mm:ss.SSS[Z]");
    };
    n.inspect = function () {
        var n, t;
        if (!this.isValid()) return "moment.invalid(/* " + this._i + " */)";
        n = "moment";
        t = "";
        this.isLocal() || ((n = 0 === this.utcOffset() ? "moment.utc" : "moment.parseZone"), (t = "Z"));
        var i = "[" + n + '("]',
            r = 0 <= this.year() && this.year() <= 9999 ? "YYYY" : "YYYYYY",
            u = t + '[")]';
        return this.format(i + r + "-MM-DD[T]HH:mm:ss.SSS" + u);
    };
    n.toJSON = function () {
        return this.isValid() ? this.toISOString() : null;
    };
    n.toString = function () {
        return this.clone().locale("en").format("ddd MMM DD YYYY HH:mm:ss [GMT]ZZ");
    };
    n.unix = function () {
        return Math.floor(this.valueOf() / 1e3);
    };
    n.valueOf = function () {
        return this._d.valueOf() - 6e4 * (this._offset || 0);
    };
    n.creationData = function () {
        return { input: this._i, format: this._f, locale: this._locale, isUTC: this._isUTC, strict: this._strict };
    };
    n.year = tf;
    n.isLeapYear = function () {
        return nr(this.year());
    };
    n.weekYear = function (n) {
        return ae.call(this, n, this.week(), this.weekday(), this.localeData()._week.dow, this.localeData()._week.doy);
    };
    n.isoWeekYear = function (n) {
        return ae.call(this, n, this.isoWeek(), this.isoWeekday(), 1, 4);
    };
    n.quarter = n.quarters = function (n) {
        return null == n ? Math.ceil((this.month() + 1) / 3) : this.month(3 * (n - 1) + (this.month() % 3));
    };
    n.month = pf;
    n.daysInMonth = function () {
        return ir(this.year(), this.month());
    };
    n.week = n.weeks = function (n) {
        var t = this.localeData().week(this);
        return null == n ? t : this.add(7 * (n - t), "d");
    };
    n.isoWeek = n.isoWeeks = function (n) {
        var t = yi(this, 1, 4).week;
        return null == n ? t : this.add(7 * (n - t), "d");
    };
    n.weeksInYear = function () {
        var n = this.localeData()._week;
        return ni(this.year(), n.dow, n.doy);
    };
    n.isoWeeksInYear = function () {
        return ni(this.year(), 1, 4);
    };
    n.date = ff;
    n.day = n.days = function (n) {
        if (!this.isValid()) return null != n ? this : NaN;
        var t = this._isUTC ? this._d.getUTCDay() : this._d.getDay();
        return null != n
            ? ((n = (function (n, t) {
                  return "string" != typeof n ? n : isNaN(n) ? ("number" == typeof (n = t.weekdaysParse(n)) ? n : null) : parseInt(n, 10);
              })(n, this.localeData())),
              this.add(n - t, "d"))
            : t;
    };
    n.weekday = function (n) {
        if (!this.isValid()) return null != n ? this : NaN;
        var t = (this.day() + 7 - this.localeData()._week.dow) % 7;
        return null == n ? t : this.add(n - t, "d");
    };
    n.isoWeekday = function (n) {
        if (!this.isValid()) return null != n ? this : NaN;
        if (null != n) {
            var t = (function (n, t) {
                return "string" == typeof n ? t.weekdaysParse(n) % 7 || 7 : isNaN(n) ? null : n;
            })(n, this.localeData());
            return this.day(this.day() % 7 ? t : t - 7);
        }
        return this.day() || 7;
    };
    n.dayOfYear = function (n) {
        var t = Math.round((this.clone().startOf("day") - this.clone().startOf("year")) / 864e5) + 1;
        return null == n ? t : this.add(n - t, "d");
    };
    n.hour = n.hours = ps;
    n.minute = n.minutes = wo;
    n.second = n.seconds = bo;
    n.millisecond = n.milliseconds = ko;
    n.utcOffset = function (n, i, r) {
        var u,
            f = this._offset || 0;
        if (!this.isValid()) return null != n ? this : NaN;
        if (null != n) {
            if ("string" == typeof n) {
                if (null === (n = hu(vr, n))) return this;
            } else Math.abs(n) < 16 && !r && (n *= 60);
            return (
                !this._isUTC && i && (u = lu(this)),
                (this._offset = n),
                (this._isUTC = !0),
                null != u && this.add(u, "m"),
                f !== n && (!i || this._changeInProgress ? he(this, it(n - f, "m"), 1, !1) : this._changeInProgress || ((this._changeInProgress = !0), t.updateOffset(this, !0), (this._changeInProgress = null))),
                this
            );
        }
        return this._isUTC ? f : lu(this);
    };
    n.utc = function (n) {
        return this.utcOffset(0, n);
    };
    n.local = function (n) {
        return this._isUTC && (this.utcOffset(0, n), (this._isUTC = !1), n && this.subtract(lu(this), "m")), this;
    };
    n.parseZone = function () {
        if (null != this._tzm) this.utcOffset(this._tzm, !1, !0);
        else if ("string" == typeof this._i) {
            var n = hu(us, this._i);
            null != n ? this.utcOffset(n) : this.utcOffset(0, !0);
        }
        return this;
    };
    n.hasAlignedHourOffset = function (n) {
        return !!this.isValid() && ((n = n ? c(n).utcOffset() : 0), (this.utcOffset() - n) % 60 == 0);
    };
    n.isDST = function () {
        return this.utcOffset() > this.clone().month(0).utcOffset() || this.utcOffset() > this.clone().month(5).utcOffset();
    };
    n.isLocal = function () {
        return !!this.isValid() && !this._isUTC;
    };
    n.isUtcOffset = function () {
        return !!this.isValid() && this._isUTC;
    };
    n.isUtc = ee;
    n.isUTC = ee;
    n.zoneAbbr = function () {
        return this._isUTC ? "UTC" : "";
    };
    n.zoneName = function () {
        return this._isUTC ? "Coordinated Universal Time" : "";
    };
    n.dates = g("dates accessor is deprecated. Use date instead.", ff);
    n.months = g("months accessor is deprecated. Use month instead", pf);
    n.years = g("years accessor is deprecated. Use year instead", tf);
    n.zone = g("moment().zone is deprecated, use moment().utcOffset instead. http://momentjs.com/guides/#/warnings/zone/", function (n, t) {
        return null != n ? ("string" != typeof n && (n = -n), this.utcOffset(n, t), this) : -this.utcOffset();
    });
    n.isDSTShifted = g("isDSTShifted is deprecated. See http://momentjs.com/guides/#/warnings/dst-shifted/ for more information", function () {
        var n, t;
        return p(this._isDSTShifted)
            ? ((n = {}), (br(n, this), (n = ie(n))._a) ? ((t = n._isUTC ? ft(n._a) : c(n._a)), (this._isDSTShifted = this.isValid() && sf(n._a, t.toArray()) > 0)) : (this._isDSTShifted = !1), this._isDSTShifted)
            : this._isDSTShifted;
    });
    o = kr.prototype;
    o.calendar = function (n, t, i) {
        var r = this._calendar[n] || this._calendar.sameElse;
        return et(r) ? r.call(t, i) : r;
    };
    o.longDateFormat = function (n) {
        var t = this._longDateFormat[n],
            i = this._longDateFormat[n.toUpperCase()];
        return t || !i
            ? t
            : ((this._longDateFormat[n] = i.replace(/MMMM|MM|DD|dddd/g, function (n) {
                  return n.slice(1);
              })),
              this._longDateFormat[n]);
    };
    o.invalidDate = function () {
        return this._invalidDate;
    };
    o.ordinal = function (n) {
        return this._ordinal.replace("%d", n);
    };
    o.preparse = ve;
    o.postformat = ve;
    o.relativeTime = function (n, t, i, r) {
        var u = this._relativeTime[i];
        return et(u) ? u(n, t, i, r) : u.replace(/%d/i, n);
    };
    o.pastFuture = function (n, t) {
        var i = this._relativeTime[n > 0 ? "future" : "past"];
        return et(i) ? i(t) : i.replace(/%s/i, t);
    };
    o.set = function (n) {
        var t;
        for (var i in n) et((t = n[i])) ? (this[i] = t) : (this["_" + i] = t);
        this._config = n;
        this._dayOfMonthOrdinalParseLenient = new RegExp((this._dayOfMonthOrdinalParse.source || this._ordinalParse.source) + "|" + /\d{1,2}/.source);
    };
    o.months = function (n, t) {
        return n ? (tt(this._months) ? this._months[n.month()] : this._months[(this._months.isFormat || oo).test(t) ? "format" : "standalone"][n.month()]) : tt(this._months) ? this._months : this._months.standalone;
    };
    o.monthsShort = function (n, t) {
        return n ? (tt(this._monthsShort) ? this._monthsShort[n.month()] : this._monthsShort[oo.test(t) ? "format" : "standalone"][n.month()]) : tt(this._monthsShort) ? this._monthsShort : this._monthsShort.standalone;
    };
    o.monthsParse = function (n, t, i) {
        var r, u, f;
        if (this._monthsParseExact)
            return function (n, t, i) {
                var u,
                    r,
                    e,
                    f = n.toLocaleLowerCase();
                if (!this._monthsParse)
                    for (this._monthsParse = [], this._longMonthsParse = [], this._shortMonthsParse = [], u = 0; u < 12; ++u)
                        (e = ft([2e3, u])), (this._shortMonthsParse[u] = this.monthsShort(e, "").toLocaleLowerCase()), (this._longMonthsParse[u] = this.months(e, "").toLocaleLowerCase());
                return i
                    ? "MMM" === t
                        ? -1 !== (r = a.call(this._shortMonthsParse, f))
                            ? r
                            : null
                        : -1 !== (r = a.call(this._longMonthsParse, f))
                        ? r
                        : null
                    : "MMM" === t
                    ? -1 !== (r = a.call(this._shortMonthsParse, f))
                        ? r
                        : -1 !== (r = a.call(this._longMonthsParse, f))
                        ? r
                        : null
                    : -1 !== (r = a.call(this._longMonthsParse, f))
                    ? r
                    : -1 !== (r = a.call(this._shortMonthsParse, f))
                    ? r
                    : null;
            }.call(this, n, t, i);
        for (this._monthsParse || ((this._monthsParse = []), (this._longMonthsParse = []), (this._shortMonthsParse = [])), r = 0; r < 12; r++)
            if (
                ((u = ft([2e3, r])),
                i &&
                    !this._longMonthsParse[r] &&
                    ((this._longMonthsParse[r] = new RegExp("^" + this.months(u, "").replace(".", "") + "$", "i")), (this._shortMonthsParse[r] = new RegExp("^" + this.monthsShort(u, "").replace(".", "") + "$", "i"))),
                i || this._monthsParse[r] || ((f = "^" + this.months(u, "") + "|^" + this.monthsShort(u, "")), (this._monthsParse[r] = new RegExp(f.replace(".", ""), "i"))),
                i && "MMMM" === t && this._longMonthsParse[r].test(n)) ||
                (i && "MMM" === t && this._shortMonthsParse[r].test(n)) ||
                (!i && this._monthsParse[r].test(n))
            )
                return r;
    };
    o.monthsRegex = function (n) {
        return this._monthsParseExact
            ? (l(this, "_monthsRegex") || wf.call(this), n ? this._monthsStrictRegex : this._monthsRegex)
            : (l(this, "_monthsRegex") || (this._monthsRegex = hs), this._monthsStrictRegex && n ? this._monthsStrictRegex : this._monthsRegex);
    };
    o.monthsShortRegex = function (n) {
        return this._monthsParseExact
            ? (l(this, "_monthsRegex") || wf.call(this), n ? this._monthsShortStrictRegex : this._monthsShortRegex)
            : (l(this, "_monthsShortRegex") || (this._monthsShortRegex = ss), this._monthsShortStrictRegex && n ? this._monthsShortStrictRegex : this._monthsShortRegex);
    };
    o.week = function (n) {
        return yi(n, this._week.dow, this._week.doy).week;
    };
    o.firstDayOfYear = function () {
        return this._week.doy;
    };
    o.firstDayOfWeek = function () {
        return this._week.dow;
    };
    o.weekdays = function (n, t) {
        return n ? (tt(this._weekdays) ? this._weekdays[n.day()] : this._weekdays[this._weekdays.isFormat.test(t) ? "format" : "standalone"][n.day()]) : tt(this._weekdays) ? this._weekdays : this._weekdays.standalone;
    };
    o.weekdaysMin = function (n) {
        return n ? this._weekdaysMin[n.day()] : this._weekdaysMin;
    };
    o.weekdaysShort = function (n) {
        return n ? this._weekdaysShort[n.day()] : this._weekdaysShort;
    };
    o.weekdaysParse = function (n, t, i) {
        var r, u, f;
        if (this._weekdaysParseExact)
            return function (n, t, i) {
                var f,
                    r,
                    e,
                    u = n.toLocaleLowerCase();
                if (!this._weekdaysParse)
                    for (this._weekdaysParse = [], this._shortWeekdaysParse = [], this._minWeekdaysParse = [], f = 0; f < 7; ++f)
                        (e = ft([2e3, 1]).day(f)),
                            (this._minWeekdaysParse[f] = this.weekdaysMin(e, "").toLocaleLowerCase()),
                            (this._shortWeekdaysParse[f] = this.weekdaysShort(e, "").toLocaleLowerCase()),
                            (this._weekdaysParse[f] = this.weekdays(e, "").toLocaleLowerCase());
                return i
                    ? "dddd" === t
                        ? -1 !== (r = a.call(this._weekdaysParse, u))
                            ? r
                            : null
                        : "ddd" === t
                        ? -1 !== (r = a.call(this._shortWeekdaysParse, u))
                            ? r
                            : null
                        : -1 !== (r = a.call(this._minWeekdaysParse, u))
                        ? r
                        : null
                    : "dddd" === t
                    ? -1 !== (r = a.call(this._weekdaysParse, u))
                        ? r
                        : -1 !== (r = a.call(this._shortWeekdaysParse, u))
                        ? r
                        : -1 !== (r = a.call(this._minWeekdaysParse, u))
                        ? r
                        : null
                    : "ddd" === t
                    ? -1 !== (r = a.call(this._shortWeekdaysParse, u))
                        ? r
                        : -1 !== (r = a.call(this._weekdaysParse, u))
                        ? r
                        : -1 !== (r = a.call(this._minWeekdaysParse, u))
                        ? r
                        : null
                    : -1 !== (r = a.call(this._minWeekdaysParse, u))
                    ? r
                    : -1 !== (r = a.call(this._weekdaysParse, u))
                    ? r
                    : -1 !== (r = a.call(this._shortWeekdaysParse, u))
                    ? r
                    : null;
            }.call(this, n, t, i);
        for (this._weekdaysParse || ((this._weekdaysParse = []), (this._minWeekdaysParse = []), (this._shortWeekdaysParse = []), (this._fullWeekdaysParse = [])), r = 0; r < 7; r++)
            if (
                ((u = ft([2e3, 1]).day(r)),
                i &&
                    !this._fullWeekdaysParse[r] &&
                    ((this._fullWeekdaysParse[r] = new RegExp("^" + this.weekdays(u, "").replace(".", ".?") + "$", "i")),
                    (this._shortWeekdaysParse[r] = new RegExp("^" + this.weekdaysShort(u, "").replace(".", ".?") + "$", "i")),
                    (this._minWeekdaysParse[r] = new RegExp("^" + this.weekdaysMin(u, "").replace(".", ".?") + "$", "i"))),
                this._weekdaysParse[r] || ((f = "^" + this.weekdays(u, "") + "|^" + this.weekdaysShort(u, "") + "|^" + this.weekdaysMin(u, "")), (this._weekdaysParse[r] = new RegExp(f.replace(".", ""), "i"))),
                i && "dddd" === t && this._fullWeekdaysParse[r].test(n)) ||
                (i && "ddd" === t && this._shortWeekdaysParse[r].test(n)) ||
                (i && "dd" === t && this._minWeekdaysParse[r].test(n)) ||
                (!i && this._weekdaysParse[r].test(n))
            )
                return r;
    };
    o.weekdaysRegex = function (n) {
        return this._weekdaysParseExact
            ? (l(this, "_weekdaysRegex") || nu.call(this), n ? this._weekdaysStrictRegex : this._weekdaysRegex)
            : (l(this, "_weekdaysRegex") || (this._weekdaysRegex = as), this._weekdaysStrictRegex && n ? this._weekdaysStrictRegex : this._weekdaysRegex);
    };
    o.weekdaysShortRegex = function (n) {
        return this._weekdaysParseExact
            ? (l(this, "_weekdaysRegex") || nu.call(this), n ? this._weekdaysShortStrictRegex : this._weekdaysShortRegex)
            : (l(this, "_weekdaysShortRegex") || (this._weekdaysShortRegex = vs), this._weekdaysShortStrictRegex && n ? this._weekdaysShortStrictRegex : this._weekdaysShortRegex);
    };
    o.weekdaysMinRegex = function (n) {
        return this._weekdaysParseExact
            ? (l(this, "_weekdaysRegex") || nu.call(this), n ? this._weekdaysMinStrictRegex : this._weekdaysMinRegex)
            : (l(this, "_weekdaysMinRegex") || (this._weekdaysMinRegex = ys), this._weekdaysMinStrictRegex && n ? this._weekdaysMinStrictRegex : this._weekdaysMinRegex);
    };
    o.isPM = function (n) {
        return "p" === (n + "").toLowerCase().charAt(0);
    };
    o.meridiem = function (n, t, i) {
        return n > 11 ? (i ? "pm" : "PM") : i ? "am" : "AM";
    };
    fi("en", {
        dayOfMonthOrdinalParse: /\d{1,2}(th|st|nd|rd)/,
        ordinal: function (n) {
            var t = n % 10;
            return n + (1 === f((n % 100) / 10) ? "th" : 1 === t ? "st" : 2 === t ? "nd" : 3 === t ? "rd" : "th");
        },
    });
    t.lang = g("moment.lang is deprecated. Use moment.locale instead.", fi);
    t.langData = g("moment.langData is deprecated. Use moment.localeData instead.", pt);
    var at = Math.abs,
        rh = wt("ms"),
        uh = wt("s"),
        fh = wt("m"),
        eh = wt("h"),
        oh = wt("d"),
        sh = wt("w"),
        hh = wt("M"),
        ch = wt("y"),
        lh = ii("milliseconds"),
        ah = ii("seconds"),
        vh = ii("minutes"),
        yh = ii("hours"),
        ph = ii("days"),
        wh = ii("months"),
        bh = ii("years"),
        kt = Math.round,
        st = { ss: 44, s: 45, m: 45, h: 22, d: 26, M: 11 },
        ef = Math.abs,
        e = ur.prototype;
    return (
        (e.isValid = function () {
            return this._isValid;
        }),
        (e.abs = function () {
            var n = this._data;
            return (
                (this._milliseconds = at(this._milliseconds)),
                (this._days = at(this._days)),
                (this._months = at(this._months)),
                (n.milliseconds = at(n.milliseconds)),
                (n.seconds = at(n.seconds)),
                (n.minutes = at(n.minutes)),
                (n.hours = at(n.hours)),
                (n.months = at(n.months)),
                (n.years = at(n.years)),
                this
            );
        }),
        (e.add = function (n, t) {
            return pe(this, n, t, 1);
        }),
        (e.subtract = function (n, t) {
            return pe(this, n, t, -1);
        }),
        (e.as = function (n) {
            if (!this.isValid()) return NaN;
            var t,
                r,
                i = this._milliseconds;
            if ("month" === (n = nt(n)) || "year" === n) return (t = this._days + i / 864e5), (r = this._months + be(t)), "month" === n ? r : r / 12;
            switch (((t = this._days + Math.round(yu(this._months))), n)) {
                case "week":
                    return t / 7 + i / 6048e5;
                case "day":
                    return t + i / 864e5;
                case "hour":
                    return 24 * t + i / 36e5;
                case "minute":
                    return 1440 * t + i / 6e4;
                case "second":
                    return 86400 * t + i / 1e3;
                case "millisecond":
                    return Math.floor(864e5 * t) + i;
                default:
                    throw new Error("Unknown unit " + n);
            }
        }),
        (e.asMilliseconds = rh),
        (e.asSeconds = uh),
        (e.asMinutes = fh),
        (e.asHours = eh),
        (e.asDays = oh),
        (e.asWeeks = sh),
        (e.asMonths = hh),
        (e.asYears = ch),
        (e.valueOf = function () {
            return this.isValid() ? this._milliseconds + 864e5 * this._days + (this._months % 12) * 2592e6 + 31536e6 * f(this._months / 12) : NaN;
        }),
        (e._bubble = function () {
            var u,
                f,
                e,
                s,
                o,
                r = this._milliseconds,
                n = this._days,
                t = this._months,
                i = this._data;
            return (
                (r >= 0 && n >= 0 && t >= 0) || (r <= 0 && n <= 0 && t <= 0) || ((r += 864e5 * we(yu(t) + n)), (n = 0), (t = 0)),
                (i.milliseconds = r % 1e3),
                (u = d(r / 1e3)),
                (i.seconds = u % 60),
                (f = d(u / 60)),
                (i.minutes = f % 60),
                (e = d(f / 60)),
                (i.hours = e % 24),
                (n += d(e / 24)),
                (o = d(be(n))),
                (t += o),
                (n -= we(yu(o))),
                (s = d(t / 12)),
                (t %= 12),
                (i.days = n),
                (i.months = t),
                (i.years = s),
                this
            );
        }),
        (e.clone = function () {
            return it(this);
        }),
        (e.get = function (n) {
            return (n = nt(n)), this.isValid() ? this[n + "s"]() : NaN;
        }),
        (e.milliseconds = lh),
        (e.seconds = ah),
        (e.minutes = vh),
        (e.hours = yh),
        (e.days = ph),
        (e.weeks = function () {
            return d(this.days() / 7);
        }),
        (e.months = wh),
        (e.years = bh),
        (e.humanize = function (n) {
            if (!this.isValid()) return this.localeData().invalidDate();
            var t = this.localeData(),
                i = (function (n, t, i) {
                    var r = it(n).abs(),
                        u = kt(r.as("s")),
                        e = kt(r.as("m")),
                        o = kt(r.as("h")),
                        s = kt(r.as("d")),
                        h = kt(r.as("M")),
                        c = kt(r.as("y")),
                        f = (u <= st.ss && ["s", u]) ||
                            (u < st.s && ["ss", u]) ||
                            (e <= 1 && ["m"]) ||
                            (e < st.m && ["mm", e]) ||
                            (o <= 1 && ["h"]) ||
                            (o < st.h && ["hh", o]) ||
                            (s <= 1 && ["d"]) ||
                            (s < st.d && ["dd", s]) ||
                            (h <= 1 && ["M"]) ||
                            (h < st.M && ["MM", h]) ||
                            (c <= 1 && ["y"]) || ["yy", c];
                    return (
                        (f[2] = t),
                        (f[3] = +n > 0),
                        (f[4] = i),
                        function (n, t, i, r, u) {
                            return u.relativeTime(t || 1, !!i, n, r);
                        }.apply(null, f)
                    );
                })(this, !n, t);
            return n && (i = t.pastFuture(+this, i)), t.postformat(i);
        }),
        (e.toISOString = or),
        (e.toString = or),
        (e.toJSON = or),
        (e.locale = ce),
        (e.localeData = le),
        (e.toIsoString = g("toIsoString() is deprecated. Please use toISOString() instead (notice the capitals)", or)),
        (e.lang = uf),
        r("X", 0, 0, "unix"),
        r("x", 0, 0, "valueOf"),
        i("x", ar),
        i("X", /[+-]?\d+(\.\d{1,3})?/),
        s("X", function (n, t, i) {
            i._d = new Date(1e3 * parseFloat(n, 10));
        }),
        s("x", function (n, t, i) {
            i._d = new Date(f(n));
        }),
        (t.version = "2.19.3"),
        (function (n) {
            ke = n;
        })(c),
        (t.fn = n),
        (t.min = function () {
            return ue("isBefore", [].slice.call(arguments, 0));
        }),
        (t.max = function () {
            return ue("isAfter", [].slice.call(arguments, 0));
        }),
        (t.now = function () {
            return Date.now ? Date.now() : +new Date();
        }),
        (t.utc = ft),
        (t.unix = function (n) {
            return c(1e3 * n);
        }),
        (t.months = function (n, t) {
            return ye(n, t, "months");
        }),
        (t.isDate = di),
        (t.locale = fi),
        (t.invalid = gi),
        (t.duration = it),
        (t.isMoment = yt),
        (t.weekdays = function (n, t, i) {
            return vu(n, t, i, "weekdays");
        }),
        (t.parseZone = function () {
            return c.apply(null, arguments).parseZone();
        }),
        (t.localeData = pt),
        (t.isDuration = ou),
        (t.monthsShort = function (n, t) {
            return ye(n, t, "monthsShort");
        }),
        (t.weekdaysMin = function (n, t, i) {
            return vu(n, t, i, "weekdaysMin");
        }),
        (t.defineLocale = ru),
        (t.updateLocale = function (n, t) {
            if (null != t) {
                var i,
                    r,
                    u = co;
                null != (r = iu(n)) && (u = r._config);
                (i = new kr((t = lf(u, t)))).parentLocale = y[n];
                y[n] = i;
                fi(n);
            } else null != y[n] && (null != y[n].parentLocale ? (y[n] = y[n].parentLocale) : null != y[n] && delete y[n]);
            return y[n];
        }),
        (t.locales = function () {
            return no(y);
        }),
        (t.weekdaysShort = function (n, t, i) {
            return vu(n, t, i, "weekdaysShort");
        }),
        (t.normalizeUnits = nt),
        (t.relativeTimeRounding = function (n) {
            return void 0 === n ? kt : "function" == typeof n && ((kt = n), !0);
        }),
        (t.relativeTimeThreshold = function (n, t) {
            return void 0 !== st[n] && (void 0 === t ? st[n] : ((st[n] = t), "s" === n && (st.ss = t - 1), !0));
        }),
        (t.calendarFormat = function (n, t) {
            var i = n.diff(t, "days", !0);
            return i < -6 ? "sameElse" : i < -1 ? "lastWeek" : i < 0 ? "lastDay" : i < 1 ? "sameDay" : i < 2 ? "nextDay" : i < 7 ? "nextWeek" : "sameElse";
        }),
        (t.prototype = n),
        t
    );
});
!(function (n, t, i, r) {
    function u(t, i) {
        this.settings = null;
        this.options = n.extend({}, u.Defaults, i);
        this.$element = n(t);
        this._handlers = {};
        this._plugins = {};
        this._supress = {};
        this._current = null;
        this._speed = null;
        this._coordinates = [];
        this._breakpoint = null;
        this._width = null;
        this._items = [];
        this._clones = [];
        this._mergers = [];
        this._widths = [];
        this._invalidated = {};
        this._pipe = [];
        this._drag = { time: null, target: null, pointer: null, stage: { start: null, current: null }, direction: null };
        this._states = { current: {}, tags: { initializing: ["busy"], animating: ["busy"], dragging: ["interacting"] } };
        n.each(
            ["onResize", "onThrottledResize"],
            n.proxy(function (t, i) {
                this._handlers[i] = n.proxy(this[i], this);
            }, this)
        );
        n.each(
            u.Plugins,
            n.proxy(function (n, t) {
                this._plugins[n.charAt(0).toLowerCase() + n.slice(1)] = new t(this);
            }, this)
        );
        n.each(
            u.Workers,
            n.proxy(function (t, i) {
                this._pipe.push({ filter: i.filter, run: n.proxy(i.run, this) });
            }, this)
        );
        this.setup();
        this.initialize();
    }
    u.Defaults = {
        items: 3,
        loop: !1,
        center: !1,
        rewind: !1,
        mouseDrag: !0,
        touchDrag: !0,
        pullDrag: !0,
        freeDrag: !1,
        margin: 0,
        stagePadding: 0,
        merge: !1,
        mergeFit: !0,
        autoWidth: !1,
        startPosition: 0,
        rtl: !1,
        smartSpeed: 250,
        fluidSpeed: !1,
        dragEndSpeed: !1,
        responsive: {},
        responsiveRefreshRate: 200,
        responsiveBaseElement: t,
        fallbackEasing: "swing",
        info: !1,
        nestedItemSelector: !1,
        itemElement: "div",
        stageElement: "div",
        refreshClass: "owl-refresh",
        loadedClass: "owl-loaded",
        loadingClass: "owl-loading",
        rtlClass: "owl-rtl",
        responsiveClass: "owl-responsive",
        dragClass: "owl-drag",
        itemClass: "owl-item",
        stageClass: "owl-stage",
        stageOuterClass: "owl-stage-outer",
        grabClass: "owl-grab",
    };
    u.Width = { Default: "default", Inner: "inner", Outer: "outer" };
    u.Type = { Event: "event", State: "state" };
    u.Plugins = {};
    u.Workers = [
        {
            filter: ["width", "settings"],
            run: function () {
                this._width = this.$element.width();
            },
        },
        {
            filter: ["width", "items", "settings"],
            run: function (n) {
                n.current = this._items && this._items[this.relative(this._current)];
            },
        },
        {
            filter: ["items", "settings"],
            run: function () {
                this.$stage.children(".cloned").remove();
            },
        },
        {
            filter: ["width", "items", "settings"],
            run: function (n) {
                var t = this.settings.margin || "",
                    u = !this.settings.autoWidth,
                    i = this.settings.rtl,
                    r = { width: "auto", "margin-left": i ? t : "", "margin-right": i ? "" : t };
                u || this.$stage.children().css(r);
                n.css = r;
            },
        },
        {
            filter: ["width", "items", "settings"],
            run: function (n) {
                var r = (this.width() / this.settings.items).toFixed(3) - this.settings.margin,
                    t = null,
                    i = this._items.length,
                    f = !this.settings.autoWidth,
                    u = [];
                for (n.items = { merge: !1, width: r }; i--; )
                    (t = this._mergers[i]), (t = (this.settings.mergeFit && Math.min(t, this.settings.items)) || t), (n.items.merge = t > 1 || n.items.merge), (u[i] = f ? r * t : this._items[i].width());
                this._widths = u;
            },
        },
        {
            filter: ["items", "settings"],
            run: function () {
                var t = [],
                    i = this._items,
                    r = this.settings,
                    f = Math.max(2 * r.items, 4),
                    s = 2 * Math.ceil(i.length / 2),
                    e = r.loop && i.length ? (r.rewind ? f : Math.max(f, s)) : 0,
                    o = "",
                    u = "";
                for (e /= 2; e--; ) t.push(this.normalize(t.length / 2, !0)), (o += i[t[t.length - 1]][0].outerHTML), t.push(this.normalize(i.length - 1 - (t.length - 1) / 2, !0)), (u = i[t[t.length - 1]][0].outerHTML + u);
                this._clones = t;
                n(o).addClass("cloned").appendTo(this.$stage);
                n(u).addClass("cloned").prependTo(this.$stage);
            },
        },
        {
            filter: ["width", "items", "settings"],
            run: function () {
                for (var u = this.settings.rtl ? 1 : -1, f = this._clones.length + this._items.length, n = -1, i = 0, r = 0, t = []; ++n < f; )
                    (i = t[n - 1] || 0), (r = this._widths[this.relative(n)] + this.settings.margin), t.push(i + r * u);
                this._coordinates = t;
            },
        },
        {
            filter: ["width", "items", "settings"],
            run: function () {
                var n = this.settings.stagePadding,
                    t = this._coordinates,
                    i = { width: Math.ceil(Math.abs(t[t.length - 1])) + 2 * n, "padding-left": n || "", "padding-right": n || "" };
                this.$stage.css(i);
            },
        },
        {
            filter: ["width", "items", "settings"],
            run: function (n) {
                var t = this._coordinates.length,
                    i = !this.settings.autoWidth,
                    r = this.$stage.children();
                if (i && n.items.merge) for (; t--; ) (n.css.width = this._widths[this.relative(t)]), r.eq(t).css(n.css);
                else i && ((n.css.width = n.items.width), r.css(n.css));
            },
        },
        {
            filter: ["items"],
            run: function () {
                this._coordinates.length < 1 && this.$stage.removeAttr("style");
            },
        },
        {
            filter: ["width", "items", "settings"],
            run: function (n) {
                n.current = n.current ? this.$stage.children().index(n.current) : 0;
                n.current = Math.max(this.minimum(), Math.min(this.maximum(), n.current));
                this.reset(n.current);
            },
        },
        {
            filter: ["position"],
            run: function () {
                this.animate(this.coordinates(this._current));
            },
        },
        {
            filter: ["width", "position", "items", "settings"],
            run: function () {
                for (var t, i, f = this.settings.rtl ? 1 : -1, e = 2 * this.settings.stagePadding, r = this.coordinates(this.current()) + e, o = r + this.width() * f, s = [], n = 0, u = this._coordinates.length; n < u; n++)
                    (t = this._coordinates[n - 1] || 0), (i = Math.abs(this._coordinates[n]) + e * f), ((this.op(t, "<=", r) && this.op(t, ">", o)) || (this.op(i, "<", r) && this.op(i, ">", o))) && s.push(n);
                this.$stage.children(".active").removeClass("active");
                this.$stage.children(":eq(" + s.join("), :eq(") + ")").addClass("active");
                this.settings.center && (this.$stage.children(".center").removeClass("center"), this.$stage.children().eq(this.current()).addClass("center"));
            },
        },
    ];
    u.prototype.initialize = function () {
        if ((this.enter("initializing"), this.trigger("initialize"), this.$element.toggleClass(this.settings.rtlClass, this.settings.rtl), this.settings.autoWidth && !this.is("pre-loading"))) {
            var t, i, u;
            t = this.$element.find("img");
            i = this.settings.nestedItemSelector ? "." + this.settings.nestedItemSelector : r;
            u = this.$element.children(i).width();
            t.length && u <= 0 && this.preloadAutoWidthImages(t);
        }
        this.$element.addClass(this.options.loadingClass);
        this.$stage = n("<" + this.settings.stageElement + ' class="' + this.settings.stageClass + '"/>').wrap('<div class="' + this.settings.stageOuterClass + '"/>');
        this.$element.append(this.$stage.parent());
        this.replace(this.$element.children().not(this.$stage.parent()));
        this.$element.is(":visible") ? this.refresh() : this.invalidate("width");
        this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass);
        this.registerEventHandlers();
        this.leave("initializing");
        this.trigger("initialized");
    };
    u.prototype.setup = function () {
        var u = this.viewport(),
            r = this.options.responsive,
            i = -1,
            t = null;
        r
            ? (n.each(r, function (n) {
                  n <= u && n > i && (i = Number(n));
              }),
              (t = n.extend({}, this.options, r[i])),
              "function" == typeof t.stagePadding && (t.stagePadding = t.stagePadding()),
              delete t.responsive,
              t.responsiveClass && this.$element.attr("class", this.$element.attr("class").replace(new RegExp("(" + this.options.responsiveClass + "-)\\S+\\s", "g"), "$1" + i)))
            : (t = n.extend({}, this.options));
        this.trigger("change", { property: { name: "settings", value: t } });
        this._breakpoint = i;
        this.settings = t;
        this.invalidate("settings");
        this.trigger("changed", { property: { name: "settings", value: this.settings } });
    };
    u.prototype.optionsLogic = function () {
        this.settings.autoWidth && ((this.settings.stagePadding = !1), (this.settings.merge = !1));
    };
    u.prototype.prepare = function (t) {
        var i = this.trigger("prepare", { content: t });
        return (
            i.data ||
                (i.data = n("<" + this.settings.itemElement + "/>")
                    .addClass(this.options.itemClass)
                    .append(t)),
            this.trigger("prepared", { content: i.data }),
            i.data
        );
    };
    u.prototype.update = function () {
        for (
            var t = 0,
                i = this._pipe.length,
                r = n.proxy(function (n) {
                    return this[n];
                }, this._invalidated),
                u = {};
            t < i;

        )
            (this._invalidated.all || n.grep(this._pipe[t].filter, r).length > 0) && this._pipe[t].run(u), t++;
        this._invalidated = {};
        this.is("valid") || this.enter("valid");
    };
    u.prototype.width = function (n) {
        switch ((n = n || u.Width.Default)) {
            case u.Width.Inner:
            case u.Width.Outer:
                return this._width;
            default:
                return this._width - 2 * this.settings.stagePadding + this.settings.margin;
        }
    };
    u.prototype.refresh = function () {
        this.enter("refreshing");
        this.trigger("refresh");
        this.setup();
        this.optionsLogic();
        this.$element.addClass(this.options.refreshClass);
        this.update();
        this.$element.removeClass(this.options.refreshClass);
        this.leave("refreshing");
        this.trigger("refreshed");
    };
    u.prototype.onThrottledResize = function () {
        t.clearTimeout(this.resizeTimer);
        this.resizeTimer = t.setTimeout(this._handlers.onResize, this.settings.responsiveRefreshRate);
    };
    u.prototype.onResize = function () {
        return (
            !!this._items.length &&
            this._width !== this.$element.width() &&
            !!this.$element.is(":visible") &&
            (this.enter("resizing"), this.trigger("resize").isDefaultPrevented() ? (this.leave("resizing"), !1) : (this.invalidate("width"), this.refresh(), this.leave("resizing"), void this.trigger("resized")))
        );
    };
    u.prototype.registerEventHandlers = function () {
        n.support.transition && this.$stage.on(n.support.transition.end + ".owl.core", n.proxy(this.onTransitionEnd, this));
        this.settings.responsive !== !1 && this.on(t, "resize", this._handlers.onThrottledResize);
        this.settings.mouseDrag &&
            (this.$element.addClass(this.options.dragClass),
            this.$stage.on("mousedown.owl.core", n.proxy(this.onDragStart, this)),
            this.$stage.on("dragstart.owl.core selectstart.owl.core", function () {
                return !1;
            }));
        this.settings.touchDrag && (this.$stage.on("touchstart.owl.core", n.proxy(this.onDragStart, this)), this.$stage.on("touchcancel.owl.core", n.proxy(this.onDragEnd, this)));
    };
    u.prototype.onDragStart = function (t) {
        var r = null;
        3 !== t.which &&
            (n.support.transform
                ? ((r = this.$stage
                      .css("transform")
                      .replace(/.*\(|\)| /g, "")
                      .split(",")),
                  (r = { x: r[16 === r.length ? 12 : 4], y: r[16 === r.length ? 13 : 5] }))
                : ((r = this.$stage.position()), (r = { x: this.settings.rtl ? r.left + this.$stage.width() - this.width() + this.settings.margin : r.left, y: r.top })),
            this.is("animating") && (n.support.transform ? this.animate(r.x) : this.$stage.stop(), this.invalidate("position")),
            this.$element.toggleClass(this.options.grabClass, "mousedown" === t.type),
            this.speed(0),
            (this._drag.time = new Date().getTime()),
            (this._drag.target = n(t.target)),
            (this._drag.stage.start = r),
            (this._drag.stage.current = r),
            (this._drag.pointer = this.pointer(t)),
            n(i).on("mouseup.owl.core touchend.owl.core", n.proxy(this.onDragEnd, this)),
            n(i).one(
                "mousemove.owl.core touchmove.owl.core",
                n.proxy(function (t) {
                    var r = this.difference(this._drag.pointer, this.pointer(t));
                    n(i).on("mousemove.owl.core touchmove.owl.core", n.proxy(this.onDragMove, this));
                    (Math.abs(r.x) < Math.abs(r.y) && this.is("valid")) || (t.preventDefault(), this.enter("dragging"), this.trigger("drag"));
                }, this)
            ));
    };
    u.prototype.onDragMove = function (n) {
        var t = null,
            i = null,
            u = null,
            f = this.difference(this._drag.pointer, this.pointer(n)),
            r = this.difference(this._drag.stage.start, f);
        this.is("dragging") &&
            (n.preventDefault(),
            this.settings.loop
                ? ((t = this.coordinates(this.minimum())), (i = this.coordinates(this.maximum() + 1) - t), (r.x = ((((r.x - t) % i) + i) % i) + t))
                : ((t = this.settings.rtl ? this.coordinates(this.maximum()) : this.coordinates(this.minimum())),
                  (i = this.settings.rtl ? this.coordinates(this.minimum()) : this.coordinates(this.maximum())),
                  (u = this.settings.pullDrag ? f.x / -5 : 0),
                  (r.x = Math.max(Math.min(r.x, t + u), i + u))),
            (this._drag.stage.current = r),
            this.animate(r.x));
    };
    u.prototype.onDragEnd = function (t) {
        var r = this.difference(this._drag.pointer, this.pointer(t)),
            f = this._drag.stage.current,
            u = (r.x > 0) ^ this.settings.rtl ? "left" : "right";
        n(i).off(".owl.core");
        this.$element.removeClass(this.options.grabClass);
        ((0 !== r.x && this.is("dragging")) || !this.is("valid")) &&
            (this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed),
            this.current(this.closest(f.x, 0 !== r.x ? u : this._drag.direction)),
            this.invalidate("position"),
            this.update(),
            (this._drag.direction = u),
            (Math.abs(r.x) > 3 || new Date().getTime() - this._drag.time > 300) &&
                this._drag.target.one("click.owl.core", function () {
                    return !1;
                }));
        this.is("dragging") && (this.leave("dragging"), this.trigger("dragged"));
    };
    u.prototype.closest = function (t, i) {
        var r = -1,
            u = 30,
            e = this.width(),
            f = this.coordinates();
        return (
            this.settings.freeDrag ||
                n.each(
                    f,
                    n.proxy(function (n, o) {
                        return (
                            "left" === i && t > o - u && t < o + u ? (r = n) : "right" === i && t > o - e - u && t < o - e + u ? (r = n + 1) : this.op(t, "<", o) && this.op(t, ">", f[n + 1] || o - e) && (r = "left" === i ? n + 1 : n),
                            r === -1
                        );
                    }, this)
                ),
            this.settings.loop || (this.op(t, ">", f[this.minimum()]) ? (r = t = this.minimum()) : this.op(t, "<", f[this.maximum()]) && (r = t = this.maximum())),
            r
        );
    };
    u.prototype.animate = function (t) {
        var i = this.speed() > 0;
        this.is("animating") && this.onTransitionEnd();
        i && (this.enter("animating"), this.trigger("translate"));
        n.support.transform3d && n.support.transition
            ? this.$stage.css({ transform: "translate3d(" + t + "px,0px,0px)", transition: this.speed() / 1e3 + "s" })
            : i
            ? this.$stage.animate({ left: t + "px" }, this.speed(), this.settings.fallbackEasing, n.proxy(this.onTransitionEnd, this))
            : this.$stage.css({ left: t + "px" });
    };
    u.prototype.is = function (n) {
        return this._states.current[n] && this._states.current[n] > 0;
    };
    u.prototype.current = function (n) {
        if (n === r) return this._current;
        if (0 === this._items.length) return r;
        if (((n = this.normalize(n)), this._current !== n)) {
            var t = this.trigger("change", { property: { name: "position", value: n } });
            t.data !== r && (n = this.normalize(t.data));
            this._current = n;
            this.invalidate("position");
            this.trigger("changed", { property: { name: "position", value: this._current } });
        }
        return this._current;
    };
    u.prototype.invalidate = function (t) {
        return (
            "string" === n.type(t) && ((this._invalidated[t] = !0), this.is("valid") && this.leave("valid")),
            n.map(this._invalidated, function (n, t) {
                return t;
            })
        );
    };
    u.prototype.reset = function (n) {
        n = this.normalize(n);
        n !== r && ((this._speed = 0), (this._current = n), this.suppress(["translate", "translated"]), this.animate(this.coordinates(n)), this.release(["translate", "translated"]));
    };
    u.prototype.normalize = function (n, t) {
        var i = this._items.length,
            u = t ? 0 : this._clones.length;
        return !this.isNumeric(n) || i < 1 ? (n = r) : (n < 0 || n >= i + u) && (n = ((((n - u / 2) % i) + i) % i) + u / 2), n;
    };
    u.prototype.relative = function (n) {
        return (n -= this._clones.length / 2), this.normalize(n, !0);
    };
    u.prototype.maximum = function (n) {
        var t,
            u,
            f,
            i = this.settings,
            r = this._coordinates.length;
        if (i.loop) r = this._clones.length / 2 + this._items.length - 1;
        else if (i.autoWidth || i.merge) {
            for (t = this._items.length, u = this._items[--t].width(), f = this.$element.width(); t-- && ((u += this._items[t].width() + this.settings.margin), !(u > f)); );
            r = t + 1;
        } else r = i.center ? this._items.length - 1 : this._items.length - i.items;
        return n && (r -= this._clones.length / 2), Math.max(r, 0);
    };
    u.prototype.minimum = function (n) {
        return n ? 0 : this._clones.length / 2;
    };
    u.prototype.items = function (n) {
        return n === r ? this._items.slice() : ((n = this.normalize(n, !0)), this._items[n]);
    };
    u.prototype.mergers = function (n) {
        return n === r ? this._mergers.slice() : ((n = this.normalize(n, !0)), this._mergers[n]);
    };
    u.prototype.clones = function (t) {
        var i = this._clones.length / 2,
            f = i + this._items.length,
            u = function (n) {
                return n % 2 == 0 ? f + n / 2 : i - (n + 1) / 2;
            };
        return t === r
            ? n.map(this._clones, function (n, t) {
                  return u(t);
              })
            : n.map(this._clones, function (n, i) {
                  return n === t ? u(i) : null;
              });
    };
    u.prototype.speed = function (n) {
        return n !== r && (this._speed = n), this._speed;
    };
    u.prototype.coordinates = function (t) {
        var i,
            f = 1,
            u = t - 1;
        return t === r
            ? n.map(
                  this._coordinates,
                  n.proxy(function (n, t) {
                      return this.coordinates(t);
                  }, this)
              )
            : (this.settings.center ? (this.settings.rtl && ((f = -1), (u = t + 1)), (i = this._coordinates[t]), (i += ((this.width() - i + (this._coordinates[u] || 0)) / 2) * f)) : (i = this._coordinates[u] || 0), (i = Math.ceil(i)));
    };
    u.prototype.duration = function (n, t, i) {
        return 0 === i ? 0 : Math.min(Math.max(Math.abs(t - n), 1), 6) * Math.abs(i || this.settings.smartSpeed);
    };
    u.prototype.to = function (n, t) {
        var f = this.current(),
            r = null,
            i = n - this.relative(f),
            s = (i > 0) - (i < 0),
            e = this._items.length,
            o = this.minimum(),
            u = this.maximum();
        this.settings.loop
            ? (!this.settings.rewind && Math.abs(i) > e / 2 && (i += s * -1 * e), (n = f + i), (r = ((((n - o) % e) + e) % e) + o), r !== n && r - i <= u && r - i > 0 && ((f = r - i), (n = r), this.reset(f)))
            : this.settings.rewind
            ? ((u += 1), (n = ((n % u) + u) % u))
            : (n = Math.max(o, Math.min(u, n)));
        this.speed(this.duration(f, n, t));
        this.current(n);
        this.$element.is(":visible") && this.update();
    };
    u.prototype.next = function (n) {
        n = n || !1;
        this.to(this.relative(this.current()) + 1, n);
    };
    u.prototype.prev = function (n) {
        n = n || !1;
        this.to(this.relative(this.current()) - 1, n);
    };
    u.prototype.onTransitionEnd = function (n) {
        if (n !== r && (n.stopPropagation(), (n.target || n.srcElement || n.originalTarget) !== this.$stage.get(0))) return !1;
        this.leave("animating");
        this.trigger("translated");
    };
    u.prototype.viewport = function () {
        var r;
        return (
            this.options.responsiveBaseElement !== t
                ? (r = n(this.options.responsiveBaseElement).width())
                : t.innerWidth
                ? (r = t.innerWidth)
                : i.documentElement && i.documentElement.clientWidth
                ? (r = i.documentElement.clientWidth)
                : console.warn("Can not detect viewport width."),
            r
        );
    };
    u.prototype.replace = function (t) {
        this.$stage.empty();
        this._items = [];
        t && (t = t instanceof jQuery ? t : n(t));
        this.settings.nestedItemSelector && (t = t.find("." + this.settings.nestedItemSelector));
        t.filter(function () {
            return 1 === this.nodeType;
        }).each(
            n.proxy(function (n, t) {
                t = this.prepare(t);
                this.$stage.append(t);
                this._items.push(t);
                this._mergers.push(1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1);
            }, this)
        );
        this.reset(this.isNumeric(this.settings.startPosition) ? this.settings.startPosition : 0);
        this.invalidate("items");
    };
    u.prototype.add = function (t, i) {
        var u = this.relative(this._current);
        i = i === r ? this._items.length : this.normalize(i, !0);
        t = t instanceof jQuery ? t : n(t);
        this.trigger("add", { content: t, position: i });
        t = this.prepare(t);
        0 === this._items.length || i === this._items.length
            ? (0 === this._items.length && this.$stage.append(t), 0 !== this._items.length && this._items[i - 1].after(t), this._items.push(t), this._mergers.push(1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1))
            : (this._items[i].before(t), this._items.splice(i, 0, t), this._mergers.splice(i, 0, 1 * t.find("[data-merge]").addBack("[data-merge]").attr("data-merge") || 1));
        this._items[u] && this.reset(this._items[u].index());
        this.invalidate("items");
        this.trigger("added", { content: t, position: i });
    };
    u.prototype.remove = function (n) {
        n = this.normalize(n, !0);
        n !== r &&
            (this.trigger("remove", { content: this._items[n], position: n }),
            this._items[n].remove(),
            this._items.splice(n, 1),
            this._mergers.splice(n, 1),
            this.invalidate("items"),
            this.trigger("removed", { content: null, position: n }));
    };
    u.prototype.preloadAutoWidthImages = function (t) {
        t.each(
            n.proxy(function (t, i) {
                this.enter("pre-loading");
                i = n(i);
                n(new Image())
                    .one(
                        "load",
                        n.proxy(function (n) {
                            i.attr("src", n.target.src);
                            i.css("opacity", 1);
                            this.leave("pre-loading");
                            !this.is("pre-loading") && !this.is("initializing") && this.refresh();
                        }, this)
                    )
                    .attr("src", i.attr("src") || i.attr("data-src") || i.attr("data-src-retina"));
            }, this)
        );
    };
    u.prototype.destroy = function () {
        this.$element.off(".owl.core");
        this.$stage.off(".owl.core");
        n(i).off(".owl.core");
        this.settings.responsive !== !1 && (t.clearTimeout(this.resizeTimer), this.off(t, "resize", this._handlers.onThrottledResize));
        for (var r in this._plugins) this._plugins[r].destroy();
        this.$stage.children(".cloned").remove();
        this.$stage.unwrap();
        this.$stage.children().contents().unwrap();
        this.$stage.children().unwrap();
        this.$element
            .removeClass(this.options.refreshClass)
            .removeClass(this.options.loadingClass)
            .removeClass(this.options.loadedClass)
            .removeClass(this.options.rtlClass)
            .removeClass(this.options.dragClass)
            .removeClass(this.options.grabClass)
            .attr("class", this.$element.attr("class").replace(new RegExp(this.options.responsiveClass + "-\\S+\\s", "g"), ""))
            .removeData("owl.carousel");
    };
    u.prototype.op = function (n, t, i) {
        var r = this.settings.rtl;
        switch (t) {
            case "<":
                return r ? n > i : n < i;
            case ">":
                return r ? n < i : n > i;
            case ">=":
                return r ? n <= i : n >= i;
            case "<=":
                return r ? n >= i : n <= i;
        }
    };
    u.prototype.on = function (n, t, i, r) {
        n.addEventListener ? n.addEventListener(t, i, r) : n.attachEvent && n.attachEvent("on" + t, i);
    };
    u.prototype.off = function (n, t, i, r) {
        n.removeEventListener ? n.removeEventListener(t, i, r) : n.detachEvent && n.detachEvent("on" + t, i);
    };
    u.prototype.trigger = function (t, i, r) {
        var o = { item: { count: this._items.length, index: this.current() } },
            e = n.camelCase(
                n
                    .grep(["on", t, r], function (n) {
                        return n;
                    })
                    .join("-")
                    .toLowerCase()
            ),
            f = n.Event([t, "owl", r || "carousel"].join(".").toLowerCase(), n.extend({ relatedTarget: this }, o, i));
        return (
            this._supress[t] ||
                (n.each(this._plugins, function (n, t) {
                    t.onTrigger && t.onTrigger(f);
                }),
                this.register({ type: u.Type.Event, name: t }),
                this.$element.trigger(f),
                this.settings && "function" == typeof this.settings[e] && this.settings[e].call(this, f)),
            f
        );
    };
    u.prototype.enter = function (t) {
        n.each(
            [t].concat(this._states.tags[t] || []),
            n.proxy(function (n, t) {
                this._states.current[t] === r && (this._states.current[t] = 0);
                this._states.current[t]++;
            }, this)
        );
    };
    u.prototype.leave = function (t) {
        n.each(
            [t].concat(this._states.tags[t] || []),
            n.proxy(function (n, t) {
                this._states.current[t]--;
            }, this)
        );
    };
    u.prototype.register = function (t) {
        if (t.type === u.Type.Event) {
            if ((n.event.special[t.name] || (n.event.special[t.name] = {}), !n.event.special[t.name].owl)) {
                var i = n.event.special[t.name]._default;
                n.event.special[t.name]._default = function (n) {
                    return !i || !i.apply || (n.namespace && n.namespace.indexOf("owl") !== -1) ? n.namespace && n.namespace.indexOf("owl") > -1 : i.apply(this, arguments);
                };
                n.event.special[t.name].owl = !0;
            }
        } else
            t.type === u.Type.State &&
                ((this._states.tags[t.name] = this._states.tags[t.name] ? this._states.tags[t.name].concat(t.tags) : t.tags),
                (this._states.tags[t.name] = n.grep(
                    this._states.tags[t.name],
                    n.proxy(function (i, r) {
                        return n.inArray(i, this._states.tags[t.name]) === r;
                    }, this)
                )));
    };
    u.prototype.suppress = function (t) {
        n.each(
            t,
            n.proxy(function (n, t) {
                this._supress[t] = !0;
            }, this)
        );
    };
    u.prototype.release = function (t) {
        n.each(
            t,
            n.proxy(function (n, t) {
                delete this._supress[t];
            }, this)
        );
    };
    u.prototype.pointer = function (n) {
        var i = { x: null, y: null };
        return (
            (n = n.originalEvent || n || t.event),
            (n = n.touches && n.touches.length ? n.touches[0] : n.changedTouches && n.changedTouches.length ? n.changedTouches[0] : n),
            n.pageX ? ((i.x = n.pageX), (i.y = n.pageY)) : ((i.x = n.clientX), (i.y = n.clientY)),
            i
        );
    };
    u.prototype.isNumeric = function (n) {
        return !isNaN(parseFloat(n));
    };
    u.prototype.difference = function (n, t) {
        return { x: n.x - t.x, y: n.y - t.y };
    };
    n.fn.owlCarousel = function (t) {
        var i = Array.prototype.slice.call(arguments, 1);
        return this.each(function () {
            var f = n(this),
                r = f.data("owl.carousel");
            r ||
                ((r = new u(this, "object" == typeof t && t)),
                f.data("owl.carousel", r),
                n.each(["next", "prev", "to", "destroy", "refresh", "replace", "add", "remove"], function (t, i) {
                    r.register({ type: u.Type.Event, name: i });
                    r.$element.on(
                        i + ".owl.carousel.core",
                        n.proxy(function (n) {
                            n.namespace && n.relatedTarget !== this && (this.suppress([i]), r[i].apply(this, [].slice.call(arguments, 1)), this.release([i]));
                        }, r)
                    );
                }));
            "string" == typeof t && "_" !== t.charAt(0) && r[t].apply(r, i);
        });
    };
    n.fn.owlCarousel.Constructor = u;
})(window.Zepto || window.jQuery, window, document),
    (function (n, t) {
        var i = function (t) {
            this._core = t;
            this._interval = null;
            this._visible = null;
            this._handlers = {
                "initialized.owl.carousel": n.proxy(function (n) {
                    n.namespace && this._core.settings.autoRefresh && this.watch();
                }, this),
            };
            this._core.options = n.extend({}, i.Defaults, this._core.options);
            this._core.$element.on(this._handlers);
        };
        i.Defaults = { autoRefresh: !0, autoRefreshInterval: 500 };
        i.prototype.watch = function () {
            this._interval || ((this._visible = this._core.$element.is(":visible")), (this._interval = t.setInterval(n.proxy(this.refresh, this), this._core.settings.autoRefreshInterval)));
        };
        i.prototype.refresh = function () {
            this._core.$element.is(":visible") !== this._visible && ((this._visible = !this._visible), this._core.$element.toggleClass("owl-hidden", !this._visible), this._visible && this._core.invalidate("width") && this._core.refresh());
        };
        i.prototype.destroy = function () {
            var n, i;
            t.clearInterval(this._interval);
            for (n in this._handlers) this._core.$element.off(n, this._handlers[n]);
            for (i in Object.getOwnPropertyNames(this)) "function" != typeof this[i] && (this[i] = null);
        };
        n.fn.owlCarousel.Constructor.Plugins.AutoRefresh = i;
    })(window.Zepto || window.jQuery, window, document),
    (function (n, t, i, r) {
        var u = function (t) {
            this._core = t;
            this._loaded = [];
            this._handlers = {
                "initialized.owl.carousel change.owl.carousel resized.owl.carousel": n.proxy(function (t) {
                    if (t.namespace && this._core.settings && this._core.settings.lazyLoad && ((t.property && "position" == t.property.name) || "initialized" == t.type))
                        for (
                            var i = this._core.settings,
                                f = (i.center && Math.ceil(i.items / 2)) || i.items,
                                e = (i.center && f * -1) || 0,
                                u = (t.property && t.property.value !== r ? t.property.value : this._core.current()) + e,
                                o = this._core.clones().length,
                                s = n.proxy(function (n, t) {
                                    this.load(t);
                                }, this);
                            e++ < f;

                        )
                            this.load(o / 2 + this._core.relative(u)), o && n.each(this._core.clones(this._core.relative(u)), s), u++;
                }, this),
            };
            this._core.options = n.extend({}, u.Defaults, this._core.options);
            this._core.$element.on(this._handlers);
        };
        u.Defaults = { lazyLoad: !1 };
        u.prototype.load = function (i) {
            var r = this._core.$stage.children().eq(i),
                u = r && r.find(".owl-lazy");
            !u ||
                n.inArray(r.get(0), this._loaded) > -1 ||
                (u.each(
                    n.proxy(function (i, r) {
                        var e,
                            u = n(r),
                            f = (t.devicePixelRatio > 1 && u.attr("data-src-retina")) || u.attr("data-src");
                        this._core.trigger("load", { element: u, url: f }, "lazy");
                        u.is("img")
                            ? u
                                  .one(
                                      "load.owl.lazy",
                                      n.proxy(function () {
                                          u.css("opacity", 1);
                                          this._core.trigger("loaded", { element: u, url: f }, "lazy");
                                      }, this)
                                  )
                                  .attr("src", f)
                            : ((e = new Image()),
                              (e.onload = n.proxy(function () {
                                  u.css({ "background-image": 'url("' + f + '")', opacity: "1" });
                                  this._core.trigger("loaded", { element: u, url: f }, "lazy");
                              }, this)),
                              (e.src = f));
                    }, this)
                ),
                this._loaded.push(r.get(0)));
        };
        u.prototype.destroy = function () {
            var n, t;
            for (n in this.handlers) this._core.$element.off(n, this.handlers[n]);
            for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null);
        };
        n.fn.owlCarousel.Constructor.Plugins.Lazy = u;
    })(window.Zepto || window.jQuery, window, document),
    (function (n) {
        var t = function (i) {
            this._core = i;
            this._handlers = {
                "initialized.owl.carousel refreshed.owl.carousel": n.proxy(function (n) {
                    n.namespace && this._core.settings.autoHeight && this.update();
                }, this),
                "changed.owl.carousel": n.proxy(function (n) {
                    n.namespace && this._core.settings.autoHeight && "position" == n.property.name && this.update();
                }, this),
                "loaded.owl.lazy": n.proxy(function (n) {
                    n.namespace && this._core.settings.autoHeight && n.element.closest("." + this._core.settings.itemClass).index() === this._core.current() && this.update();
                }, this),
            };
            this._core.options = n.extend({}, t.Defaults, this._core.options);
            this._core.$element.on(this._handlers);
        };
        t.Defaults = { autoHeight: !1, autoHeightClass: "owl-height" };
        t.prototype.update = function () {
            var t = this._core._current,
                u = t + this._core.settings.items,
                f = this._core.$stage.children().toArray().slice(t, u),
                i = [],
                r = 0;
            n.each(f, function (t, r) {
                i.push(n(r).height());
            });
            r = Math.max.apply(null, i);
            this._core.$stage.parent().height(r).addClass(this._core.settings.autoHeightClass);
        };
        t.prototype.destroy = function () {
            var n, t;
            for (n in this._handlers) this._core.$element.off(n, this._handlers[n]);
            for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null);
        };
        n.fn.owlCarousel.Constructor.Plugins.AutoHeight = t;
    })(window.Zepto || window.jQuery, window, document),
    (function (n, t, i) {
        var r = function (t) {
            this._core = t;
            this._videos = {};
            this._playing = null;
            this._handlers = {
                "initialized.owl.carousel": n.proxy(function (n) {
                    n.namespace && this._core.register({ type: "state", name: "playing", tags: ["interacting"] });
                }, this),
                "resize.owl.carousel": n.proxy(function (n) {
                    n.namespace && this._core.settings.video && this.isInFullScreen() && n.preventDefault();
                }, this),
                "refreshed.owl.carousel": n.proxy(function (n) {
                    n.namespace && this._core.is("resizing") && this._core.$stage.find(".cloned .owl-video-frame").remove();
                }, this),
                "changed.owl.carousel": n.proxy(function (n) {
                    n.namespace && "position" === n.property.name && this._playing && this.stop();
                }, this),
                "prepared.owl.carousel": n.proxy(function (t) {
                    if (t.namespace) {
                        var i = n(t.content).find(".owl-video");
                        i.length && (i.css("display", "none"), this.fetch(i, n(t.content)));
                    }
                }, this),
            };
            this._core.options = n.extend({}, r.Defaults, this._core.options);
            this._core.$element.on(this._handlers);
            this._core.$element.on(
                "click.owl.video",
                ".owl-video-play-icon",
                n.proxy(function (n) {
                    this.play(n);
                }, this)
            );
        };
        r.Defaults = { video: !1, videoHeight: !1, videoWidth: !1 };
        r.prototype.fetch = function (n, t) {
            var u = (function () {
                    return n.attr("data-vimeo-id") ? "vimeo" : n.attr("data-vzaar-id") ? "vzaar" : "youtube";
                })(),
                i = n.attr("data-vimeo-id") || n.attr("data-youtube-id") || n.attr("data-vzaar-id"),
                f = n.attr("data-width") || this._core.settings.videoWidth,
                e = n.attr("data-height") || this._core.settings.videoHeight,
                r = n.attr("href");
            if (!r) throw new Error("Missing video URL.");
            if (
                ((i = r.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/)),
                i[3].indexOf("youtu") > -1)
            )
                u = "youtube";
            else if (i[3].indexOf("vimeo") > -1) u = "vimeo";
            else {
                if (!(i[3].indexOf("vzaar") > -1)) throw new Error("Video URL not supported.");
                u = "vzaar";
            }
            i = i[6];
            this._videos[r] = { type: u, id: i, width: f, height: e };
            t.attr("data-video", r);
            this.thumbnail(n, this._videos[r]);
        };
        r.prototype.thumbnail = function (t, i) {
            var o,
                s,
                r,
                c = i.width && i.height ? 'style="width:' + i.width + "px;height:" + i.height + 'px;"' : "",
                f = t.find("img"),
                e = "src",
                h = "",
                l = this._core.settings,
                u = function (n) {
                    s = '<div class="owl-video-play-icon"></div>';
                    o = l.lazyLoad ? '<div class="owl-video-tn ' + h + '" ' + e + '="' + n + '"></div>' : '<div class="owl-video-tn" style="opacity:1;background-image:url(' + n + ')"></div>';
                    t.after(o);
                    t.after(s);
                };
            if ((t.wrap('<div class="owl-video-wrapper"' + c + "></div>"), this._core.settings.lazyLoad && ((e = "data-src"), (h = "owl-lazy")), f.length)) return u(f.attr(e)), f.remove(), !1;
            "youtube" === i.type
                ? ((r = "//img.youtube.com/vi/" + i.id + "/hqdefault.jpg"), u(r))
                : "vimeo" === i.type
                ? n.ajax({
                      type: "GET",
                      url: "//vimeo.com/api/v2/video/" + i.id + ".json",
                      jsonp: "callback",
                      dataType: "jsonp",
                      success: function (n) {
                          r = n[0].thumbnail_large;
                          u(r);
                      },
                  })
                : "vzaar" === i.type &&
                  n.ajax({
                      type: "GET",
                      url: "//vzaar.com/api/videos/" + i.id + ".json",
                      jsonp: "callback",
                      dataType: "jsonp",
                      success: function (n) {
                          r = n.framegrab_url;
                          u(r);
                      },
                  });
        };
        r.prototype.stop = function () {
            this._core.trigger("stop", null, "video");
            this._playing.find(".owl-video-frame").remove();
            this._playing.removeClass("owl-video-playing");
            this._playing = null;
            this._core.leave("playing");
            this._core.trigger("stopped", null, "video");
        };
        r.prototype.play = function (t) {
            var u,
                o = n(t.target),
                r = o.closest("." + this._core.settings.itemClass),
                i = this._videos[r.attr("data-video")],
                f = i.width || "100%",
                e = i.height || this._core.$stage.height();
            this._playing ||
                (this._core.enter("playing"),
                this._core.trigger("play", null, "video"),
                (r = this._core.items(this._core.relative(r.index()))),
                this._core.reset(r.index()),
                "youtube" === i.type
                    ? (u = '<iframe width="' + f + '" height="' + e + '" src="//www.youtube.com/embed/' + i.id + "?autoplay=1&rel=0&v=" + i.id + '" frameborder="0" allowfullscreen></iframe>')
                    : "vimeo" === i.type
                    ? (u = '<iframe src="//player.vimeo.com/video/' + i.id + '?autoplay=1" width="' + f + '" height="' + e + '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>')
                    : "vzaar" === i.type && (u = '<iframe frameborder="0"height="' + e + '"width="' + f + '" allowfullscreen mozallowfullscreen webkitAllowFullScreen src="//view.vzaar.com/' + i.id + '/player?autoplay=true"></iframe>'),
                n('<div class="owl-video-frame">' + u + "</div>").insertAfter(r.find(".owl-video")),
                (this._playing = r.addClass("owl-video-playing")));
        };
        r.prototype.isInFullScreen = function () {
            var t = i.fullscreenElement || i.mozFullScreenElement || i.webkitFullscreenElement;
            return t && n(t).parent().hasClass("owl-video-frame");
        };
        r.prototype.destroy = function () {
            var n, t;
            this._core.$element.off("click.owl.video");
            for (n in this._handlers) this._core.$element.off(n, this._handlers[n]);
            for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null);
        };
        n.fn.owlCarousel.Constructor.Plugins.Video = r;
    })(window.Zepto || window.jQuery, window, document),
    (function (n, t, i, r) {
        var u = function (t) {
            this.core = t;
            this.core.options = n.extend({}, u.Defaults, this.core.options);
            this.swapping = !0;
            this.previous = r;
            this.next = r;
            this.handlers = {
                "change.owl.carousel": n.proxy(function (n) {
                    n.namespace && "position" == n.property.name && ((this.previous = this.core.current()), (this.next = n.property.value));
                }, this),
                "drag.owl.carousel dragged.owl.carousel translated.owl.carousel": n.proxy(function (n) {
                    n.namespace && (this.swapping = "translated" == n.type);
                }, this),
                "translate.owl.carousel": n.proxy(function (n) {
                    n.namespace && this.swapping && (this.core.options.animateOut || this.core.options.animateIn) && this.swap();
                }, this),
            };
            this.core.$element.on(this.handlers);
        };
        u.Defaults = { animateOut: !1, animateIn: !1 };
        u.prototype.swap = function () {
            if (1 === this.core.settings.items && n.support.animation && n.support.transition) {
                this.core.speed(0);
                var t,
                    i = n.proxy(this.clear, this),
                    f = this.core.$stage.children().eq(this.previous),
                    e = this.core.$stage.children().eq(this.next),
                    r = this.core.settings.animateIn,
                    u = this.core.settings.animateOut;
                this.core.current() !== this.previous &&
                    (u &&
                        ((t = this.core.coordinates(this.previous) - this.core.coordinates(this.next)),
                        f
                            .one(n.support.animation.end, i)
                            .css({ left: t + "px" })
                            .addClass("animated owl-animated-out")
                            .addClass(u)),
                    r && e.one(n.support.animation.end, i).addClass("animated owl-animated-in").addClass(r));
            }
        };
        u.prototype.clear = function (t) {
            n(t.target).css({ left: "" }).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut);
            this.core.onTransitionEnd();
        };
        u.prototype.destroy = function () {
            var n, t;
            for (n in this.handlers) this.core.$element.off(n, this.handlers[n]);
            for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null);
        };
        n.fn.owlCarousel.Constructor.Plugins.Animate = u;
    })(window.Zepto || window.jQuery, window, document),
    (function (n, t, i) {
        var r = function (t) {
            this._core = t;
            this._timeout = null;
            this._paused = !1;
            this._handlers = {
                "changed.owl.carousel": n.proxy(function (n) {
                    n.namespace && "settings" === n.property.name ? (this._core.settings.autoplay ? this.play() : this.stop()) : n.namespace && "position" === n.property.name && this._core.settings.autoplay && this._setAutoPlayInterval();
                }, this),
                "initialized.owl.carousel": n.proxy(function (n) {
                    n.namespace && this._core.settings.autoplay && this.play();
                }, this),
                "play.owl.autoplay": n.proxy(function (n, t, i) {
                    n.namespace && this.play(t, i);
                }, this),
                "stop.owl.autoplay": n.proxy(function (n) {
                    n.namespace && this.stop();
                }, this),
                "mouseover.owl.autoplay": n.proxy(function () {
                    this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause();
                }, this),
                "mouseleave.owl.autoplay": n.proxy(function () {
                    this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.play();
                }, this),
                "touchstart.owl.core": n.proxy(function () {
                    this._core.settings.autoplayHoverPause && this._core.is("rotating") && this.pause();
                }, this),
                "touchend.owl.core": n.proxy(function () {
                    this._core.settings.autoplayHoverPause && this.play();
                }, this),
            };
            this._core.$element.on(this._handlers);
            this._core.options = n.extend({}, r.Defaults, this._core.options);
        };
        r.Defaults = { autoplay: !1, autoplayTimeout: 5e3, autoplayHoverPause: !1, autoplaySpeed: !1 };
        r.prototype.play = function () {
            this._paused = !1;
            this._core.is("rotating") || (this._core.enter("rotating"), this._setAutoPlayInterval());
        };
        r.prototype._getNextTimeout = function (r, u) {
            return (
                this._timeout && t.clearTimeout(this._timeout),
                t.setTimeout(
                    n.proxy(function () {
                        this._paused || this._core.is("busy") || this._core.is("interacting") || i.hidden || this._core.next(u || this._core.settings.autoplaySpeed);
                    }, this),
                    r || this._core.settings.autoplayTimeout
                )
            );
        };
        r.prototype._setAutoPlayInterval = function () {
            this._timeout = this._getNextTimeout();
        };
        r.prototype.stop = function () {
            this._core.is("rotating") && (t.clearTimeout(this._timeout), this._core.leave("rotating"));
        };
        r.prototype.pause = function () {
            this._core.is("rotating") && (this._paused = !0);
        };
        r.prototype.destroy = function () {
            var n, t;
            this.stop();
            for (n in this._handlers) this._core.$element.off(n, this._handlers[n]);
            for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null);
        };
        n.fn.owlCarousel.Constructor.Plugins.autoplay = r;
    })(window.Zepto || window.jQuery, window, document),
    (function (n) {
        "use strict";
        var t = function (i) {
            this._core = i;
            this._initialized = !1;
            this._pages = [];
            this._controls = {};
            this._templates = [];
            this.$element = this._core.$element;
            this._overrides = { next: this._core.next, prev: this._core.prev, to: this._core.to };
            this._handlers = {
                "prepared.owl.carousel": n.proxy(function (t) {
                    t.namespace && this._core.settings.dotsData && this._templates.push('<div class="' + this._core.settings.dotClass + '">' + n(t.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot") + "</div>");
                }, this),
                "added.owl.carousel": n.proxy(function (n) {
                    n.namespace && this._core.settings.dotsData && this._templates.splice(n.position, 0, this._templates.pop());
                }, this),
                "remove.owl.carousel": n.proxy(function (n) {
                    n.namespace && this._core.settings.dotsData && this._templates.splice(n.position, 1);
                }, this),
                "changed.owl.carousel": n.proxy(function (n) {
                    n.namespace && "position" == n.property.name && this.draw();
                }, this),
                "initialized.owl.carousel": n.proxy(function (n) {
                    n.namespace && !this._initialized && (this._core.trigger("initialize", null, "navigation"), this.initialize(), this.update(), this.draw(), (this._initialized = !0), this._core.trigger("initialized", null, "navigation"));
                }, this),
                "refreshed.owl.carousel": n.proxy(function (n) {
                    n.namespace && this._initialized && (this._core.trigger("refresh", null, "navigation"), this.update(), this.draw(), this._core.trigger("refreshed", null, "navigation"));
                }, this),
            };
            this._core.options = n.extend({}, t.Defaults, this._core.options);
            this.$element.on(this._handlers);
        };
        t.Defaults = {
            nav: !1,
            navText: ["prev", "next"],
            navSpeed: !1,
            navElement: "div",
            navContainer: !1,
            navContainerClass: "owl-nav",
            navClass: ["owl-prev", "owl-next"],
            slideBy: 1,
            dotClass: "owl-dot",
            dotsClass: "owl-dots",
            dots: !0,
            dotsEach: !1,
            dotsData: !1,
            dotsSpeed: !1,
            dotsContainer: !1,
        };
        t.prototype.initialize = function () {
            var i,
                t = this._core.settings;
            this._controls.$relative = (t.navContainer ? n(t.navContainer) : n("<div>").addClass(t.navContainerClass).appendTo(this.$element)).addClass("disabled");
            this._controls.$previous = n("<" + t.navElement + ">")
                .addClass(t.navClass[0])
                .html(t.navText[0])
                .prependTo(this._controls.$relative)
                .on(
                    "click",
                    n.proxy(function () {
                        this.prev(t.navSpeed);
                    }, this)
                );
            this._controls.$next = n("<" + t.navElement + ">")
                .addClass(t.navClass[1])
                .html(t.navText[1])
                .appendTo(this._controls.$relative)
                .on(
                    "click",
                    n.proxy(function () {
                        this.next(t.navSpeed);
                    }, this)
                );
            t.dotsData || (this._templates = [n("<div>").addClass(t.dotClass).append(n("<span>")).prop("outerHTML")]);
            this._controls.$absolute = (t.dotsContainer ? n(t.dotsContainer) : n("<div>").addClass(t.dotsClass).appendTo(this.$element)).addClass("disabled");
            this._controls.$absolute.on(
                "click",
                "div",
                n.proxy(function (i) {
                    var r = n(i.target).parent().is(this._controls.$absolute) ? n(i.target).index() : n(i.target).parent().index();
                    i.preventDefault();
                    this.to(r, t.dotsSpeed);
                }, this)
            );
            for (i in this._overrides) this._core[i] = n.proxy(this[i], this);
        };
        t.prototype.destroy = function () {
            var n, r, t, i;
            for (n in this._handlers) this.$element.off(n, this._handlers[n]);
            for (r in this._controls) this._controls[r].remove();
            for (i in this.overides) this._core[i] = this._overrides[i];
            for (t in Object.getOwnPropertyNames(this)) "function" != typeof this[t] && (this[t] = null);
        };
        t.prototype.update = function () {
            var t,
                i,
                f,
                r = this._core.clones().length / 2,
                o = r + this._core.items().length,
                u = this._core.maximum(!0),
                n = this._core.settings,
                e = n.center || n.autoWidth || n.dotsData ? 1 : n.dotsEach || n.items;
            if (("page" !== n.slideBy && (n.slideBy = Math.min(n.slideBy, n.items)), n.dots || "page" == n.slideBy))
                for (this._pages = [], t = r, i = 0, f = 0; t < o; t++) {
                    if (i >= e || 0 === i) {
                        if ((this._pages.push({ start: Math.min(u, t - r), end: t - r + e - 1 }), Math.min(u, t - r) === u)) break;
                        i = 0;
                        ++f;
                    }
                    i += this._core.mergers(this._core.relative(t));
                }
        };
        t.prototype.draw = function () {
            var i,
                t = this._core.settings,
                r = this._core.items().length <= t.items,
                u = this._core.relative(this._core.current()),
                f = t.loop || t.rewind;
            this._controls.$relative.toggleClass("disabled", !t.nav || r);
            t.nav && (this._controls.$previous.toggleClass("disabled", !f && u <= this._core.minimum(!0)), this._controls.$next.toggleClass("disabled", !f && u >= this._core.maximum(!0)));
            this._controls.$absolute.toggleClass("disabled", !t.dots || r);
            t.dots &&
                ((i = this._pages.length - this._controls.$absolute.children().length),
                t.dotsData && 0 !== i
                    ? this._controls.$absolute.html(this._templates.join(""))
                    : i > 0
                    ? this._controls.$absolute.append(new Array(i + 1).join(this._templates[0]))
                    : i < 0 && this._controls.$absolute.children().slice(i).remove(),
                this._controls.$absolute.find(".active").removeClass("active"),
                this._controls.$absolute.children().eq(n.inArray(this.current(), this._pages)).addClass("active"));
        };
        t.prototype.onTrigger = function (t) {
            var i = this._core.settings;
            t.page = { index: n.inArray(this.current(), this._pages), count: this._pages.length, size: i && (i.center || i.autoWidth || i.dotsData ? 1 : i.dotsEach || i.items) };
        };
        t.prototype.current = function () {
            var t = this._core.relative(this._core.current());
            return n
                .grep(
                    this._pages,
                    n.proxy(function (n) {
                        return n.start <= t && n.end >= t;
                    }, this)
                )
                .pop();
        };
        t.prototype.getPosition = function (t) {
            var i,
                r,
                u = this._core.settings;
            return (
                "page" == u.slideBy
                    ? ((i = n.inArray(this.current(), this._pages)), (r = this._pages.length), t ? ++i : --i, (i = this._pages[((i % r) + r) % r].start))
                    : ((i = this._core.relative(this._core.current())), (r = this._core.items().length), t ? (i += u.slideBy) : (i -= u.slideBy)),
                i
            );
        };
        t.prototype.next = function (t) {
            n.proxy(this._overrides.to, this._core)(this.getPosition(!0), t);
        };
        t.prototype.prev = function (t) {
            n.proxy(this._overrides.to, this._core)(this.getPosition(!1), t);
        };
        t.prototype.to = function (t, i, r) {
            var u;
            !r && this._pages.length ? ((u = this._pages.length), n.proxy(this._overrides.to, this._core)(this._pages[((t % u) + u) % u].start, i)) : n.proxy(this._overrides.to, this._core)(t, i);
        };
        n.fn.owlCarousel.Constructor.Plugins.Navigation = t;
    })(window.Zepto || window.jQuery, window, document),
    (function (n, t, i, r) {
        "use strict";
        var u = function (i) {
            this._core = i;
            this._hashes = {};
            this.$element = this._core.$element;
            this._handlers = {
                "initialized.owl.carousel": n.proxy(function (i) {
                    i.namespace && "URLHash" === this._core.settings.startPosition && n(t).trigger("hashchange.owl.navigation");
                }, this),
                "prepared.owl.carousel": n.proxy(function (t) {
                    if (t.namespace) {
                        var i = n(t.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");
                        if (!i) return;
                        this._hashes[i] = t.content;
                    }
                }, this),
                "changed.owl.carousel": n.proxy(function (i) {
                    if (i.namespace && "position" === i.property.name) {
                        var u = this._core.items(this._core.relative(this._core.current())),
                            r = n
                                .map(this._hashes, function (n, t) {
                                    return n === u ? t : null;
                                })
                                .join();
                        if (!r || t.location.hash.slice(1) === r) return;
                        t.location.hash = r;
                    }
                }, this),
            };
            this._core.options = n.extend({}, u.Defaults, this._core.options);
            this.$element.on(this._handlers);
            n(t).on(
                "hashchange.owl.navigation",
                n.proxy(function () {
                    var i = t.location.hash.substring(1),
                        u = this._core.$stage.children(),
                        n = this._hashes[i] && u.index(this._hashes[i]);
                    n !== r && n !== this._core.current() && this._core.to(this._core.relative(n), !1, !0);
                }, this)
            );
        };
        u.Defaults = { URLhashListener: !1 };
        u.prototype.destroy = function () {
            var i, r;
            n(t).off("hashchange.owl.navigation");
            for (i in this._handlers) this._core.$element.off(i, this._handlers[i]);
            for (r in Object.getOwnPropertyNames(this)) "function" != typeof this[r] && (this[r] = null);
        };
        n.fn.owlCarousel.Constructor.Plugins.Hash = u;
    })(window.Zepto || window.jQuery, window, document),
    (function (n, t, i, r) {
        function u(t, i) {
            var u = !1,
                f = t.charAt(0).toUpperCase() + t.slice(1);
            return (
                n.each((t + " " + h.join(f + " ") + f).split(" "), function (n, t) {
                    if (s[t] !== r) return (u = !i || t), !1;
                }),
                u
            );
        }
        function e(n) {
            return u(n, !0);
        }
        var s = n("<support>").get(0).style,
            h = "Webkit Moz O ms".split(" "),
            o = {
                transition: { end: { WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "oTransitionEnd", transition: "transitionend" } },
                animation: { end: { WebkitAnimation: "webkitAnimationEnd", MozAnimation: "animationend", OAnimation: "oAnimationEnd", animation: "animationend" } },
            },
            f = {
                csstransforms: function () {
                    return !!u("transform");
                },
                csstransforms3d: function () {
                    return !!u("perspective");
                },
                csstransitions: function () {
                    return !!u("transition");
                },
                cssanimations: function () {
                    return !!u("animation");
                },
            };
        f.csstransitions() && ((n.support.transition = new String(e("transition"))), (n.support.transition.end = o.transition.end[n.support.transition]));
        f.cssanimations() && ((n.support.animation = new String(e("animation"))), (n.support.animation.end = o.animation.end[n.support.animation]));
        f.csstransforms() && ((n.support.transform = new String(e("transform"))), (n.support.transform3d = f.csstransforms3d()));
    })(window.Zepto || window.jQuery, window, document),
    function () {
        function u(n) {
            this._n = n;
        }
        function f(n, t, i) {
            var u = Math.pow(10, t),
                r,
                f;
            return (r = (Math.round(n * u) / u).toFixed(t)), i && ((f = new RegExp("0{1," + i + "}$")), (r = r.replace(f, ""))), r;
        }
        function e(n, t) {
            return t.indexOf("$") > -1 ? s(n, t) : t.indexOf("%") > -1 ? h(n, t) : t.indexOf(":") > -1 ? c(n, t) : a(n, t);
        }
        function o(i, u) {
            var f, o;
            if (u.indexOf(":") > -1) i._n = l(u);
            else if (u === r) i._n = 0;
            else {
                f = u;
                n[t].delimiters.decimal !== "." && (u = u.replace(/\./g, "").replace(n[t].delimiters.decimal, "."));
                var h = new RegExp(n[t].abbreviations.thousand + "(?:\\)|(\\" + n[t].currency.symbol + ")?(?:\\))?)?$"),
                    c = new RegExp(n[t].abbreviations.million + "(?:\\)|(\\" + n[t].currency.symbol + ")?(?:\\))?)?$"),
                    a = new RegExp(n[t].abbreviations.billion + "(?:\\)|(\\" + n[t].currency.symbol + ")?(?:\\))?)?$"),
                    v = new RegExp(n[t].abbreviations.trillion + "(?:\\)|(\\" + n[t].currency.symbol + ")?(?:\\))?)?$"),
                    s = ["KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"],
                    e = !1;
                for (o = 0; o <= s.length; o++) if (((e = u.indexOf(s[o]) > -1 ? Math.pow(1024, o + 1) : !1), e)) break;
                i._n =
                    (e ? e : 1) *
                    (f.match(h) ? Math.pow(10, 3) : 1) *
                    (f.match(c) ? Math.pow(10, 6) : 1) *
                    (f.match(a) ? Math.pow(10, 9) : 1) *
                    (f.match(v) ? Math.pow(10, 12) : 1) *
                    (u.indexOf("%") > -1 ? 0.01 : 1) *
                    Number((u.indexOf("(") > -1 ? "-" : "") + u.replace(/[^0-9\.'-]+/g, ""));
                i._n = e ? Math.ceil(i._n) : i._n;
            }
            return i._n;
        }
        function s(i, r) {
            var o = r.indexOf("$") <= 1 ? !0 : !1,
                f = "",
                u;
            return (
                r.indexOf(" $") > -1 ? ((f = " "), (r = r.replace(" $", ""))) : r.indexOf("$ ") > -1 ? ((f = " "), (r = r.replace("$ ", ""))) : (r = r.replace("$", "")),
                (u = e(i, r)),
                o
                    ? u.indexOf("(") > -1 || u.indexOf("-") > -1
                        ? ((u = u.split("")), u.splice(1, 0, n[t].currency.symbol + f), (u = u.join("")))
                        : (u = n[t].currency.symbol + f + u)
                    : u.indexOf(")") > -1
                    ? ((u = u.split("")), u.splice(-1, 0, f + n[t].currency.symbol), (u = u.join("")))
                    : (u = u + f + n[t].currency.symbol),
                u
            );
        }
        function h(n, t) {
            var r = "",
                i;
            return (
                t.indexOf(" %") > -1 ? ((r = " "), (t = t.replace(" %", ""))) : (t = t.replace("%", "")),
                (n._n = n._n * 100),
                (i = e(n, t)),
                i.indexOf(")") > -1 ? ((i = i.split("")), i.splice(-1, 0, r + "%"), (i = i.join(""))) : (i = i + r + "%"),
                i
            );
        }
        function c(n) {
            var i = Math.floor(n._n / 3600),
                t = Math.floor((n._n - i * 3600) / 60),
                r = Math.round(n._n - i * 3600 - t * 60);
            return i + ":" + (t < 10 ? "0" + t : t) + ":" + (r < 10 ? "0" + r : r);
        }
        function l(n) {
            var t = n.split(":"),
                i = 0;
            return t.length === 3 ? ((i += Number(t[0]) * 3600), (i += Number(t[1]) * 60), (i += Number(t[2]))) : t.lenght === 2 && ((i += Number(t[0]) * 60), (i += Number(t[1]))), Number(i);
        }
        function a(i, u) {
            var a = !1,
                k = !1,
                h = "",
                v = "",
                y = "",
                c = Math.abs(i._n),
                b,
                p,
                d,
                l;
            if (i._n === 0 && r !== null) return r;
            if (
                (u.indexOf("(") > -1 && ((a = !0), (u = u.slice(1, -1))),
                u.indexOf("a") > -1 &&
                    (u.indexOf(" a") > -1 ? ((h = " "), (u = u.replace(" a", ""))) : (u = u.replace("a", "")),
                    c >= Math.pow(10, 12)
                        ? ((h += n[t].abbreviations.tillion), (i._n = i._n / Math.pow(10, 12)))
                        : c < Math.pow(10, 12) && c >= Math.pow(10, 9)
                        ? ((h += n[t].abbreviations.billion), (i._n = i._n / Math.pow(10, 9)))
                        : c < Math.pow(10, 9) && c >= Math.pow(10, 6)
                        ? ((h += n[t].abbreviations.million), (i._n = i._n / Math.pow(10, 6)))
                        : c < Math.pow(10, 6) && c >= Math.pow(10, 3) && ((h += n[t].abbreviations.thousand), (i._n = i._n / Math.pow(10, 3)))),
                u.indexOf("b") > -1)
            )
                for (u.indexOf(" b") > -1 ? ((v = " "), (u = u.replace(" b", ""))) : (u = u.replace("b", "")), b = ["B", "KB", "MB", "GB", "TB", "PB", "EB", "ZB", "YB"], l = 0; l <= b.length; l++)
                    if (((p = Math.pow(1024, l)), (d = Math.pow(1024, l + 1)), i._n >= p && i._n < d)) {
                        v += b[l];
                        p > 0 && (i._n = i._n / p);
                        break;
                    }
            u.indexOf("o") > -1 && (u.indexOf(" o") > -1 ? ((y = " "), (u = u.replace(" o", ""))) : (u = u.replace("o", "")), (y += n[t].ordinal(i._n)));
            u.indexOf("[.]") > -1 && ((k = !0), (u = u.replace("[.]", ".")));
            var o = i._n.toString().split(".")[0],
                e = u.split(".")[1],
                g = u.indexOf(","),
                s = "",
                w = !1;
            return (
                e
                    ? (e.indexOf("[") > -1 ? ((e = e.replace("]", "")), (e = e.split("[")), (s = f(i._n, e[0].length + e[1].length, e[1].length))) : (s = f(i._n, e.length)),
                      (o = s.split(".")[0]),
                      (s = s.split(".")[1].length ? n[t].delimiters.decimal + s.split(".")[1] : ""),
                      k && Number(s) === 0 && (s = ""))
                    : (o = f(i._n, null)),
                o.indexOf("-") > -1 && ((o = o.slice(1)), (w = !0)),
                g > -1 && (o = o.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1" + n[t].delimiters.thousands)),
                u.indexOf(".") === 0 && (o = ""),
                (a && w ? "(" : "") + (!a && w ? "-" : "") + o + s + (y ? y : "") + (h ? h : "") + (v ? v : "") + (a && w ? ")" : "")
            );
        }
        function v(t, i) {
            n[t] = i;
        }
        var i,
            n = {},
            t = "en",
            r = null,
            y = typeof module != "undefined" && module.exports;
        i = function (n) {
            return i.isNumeral(n) ? (n = n.value()) : Number(n) || (n = 0), new u(Number(n));
        };
        i.version = "1.4.5";
        i.isNumeral = function (n) {
            return n instanceof u;
        };
        i.language = function (r, u) {
            return r ? (r && !u && (t = r), (u || !n[r]) && v(r, u), i) : t;
        };
        i.language("en", {
            delimiters: { thousands: ",", decimal: "." },
            abbreviations: { thousand: "k", million: "m", billion: "b", trillion: "t" },
            ordinal: function (n) {
                var t = n % 10;
                return ~~((n % 100) / 10) == 1 ? "th" : t === 1 ? "st" : t === 2 ? "nd" : t === 3 ? "rd" : "th";
            },
            currency: { symbol: "$" },
        });
        i.zeroFormat = function (n) {
            r = typeof n == "string" ? n : null;
        };
        i.fn = u.prototype = {
            clone: function () {
                return i(this);
            },
            format: function (n) {
                return e(this, n ? n : i.defaultFormat);
            },
            unformat: function (n) {
                return o(this, n ? n : i.defaultFormat);
            },
            value: function () {
                return this._n;
            },
            valueOf: function () {
                return this._n;
            },
            set: function (n) {
                return (this._n = Number(n)), this;
            },
            add: function (n) {
                return (this._n = this._n + Number(n)), this;
            },
            subtract: function (n) {
                return (this._n = this._n - Number(n)), this;
            },
            multiply: function (n) {
                return (this._n = this._n * Number(n)), this;
            },
            divide: function (n) {
                return (this._n = this._n / Number(n)), this;
            },
            difference: function (n) {
                var t = this._n - Number(n);
                return t < 0 && (t = -t), t;
            },
        };
        y && (module.exports = i);
        typeof ender == "undefined" && (this.numeral = i);
        typeof define == "function" &&
            define.amd &&
            define([], function () {
                return i;
            });
    }.call(this),
    (function (n, t, i) {
        "use strict";
        var o = function (t) {
                return this.each(function () {
                    var u = n(this),
                        r = u.data("animateSprite"),
                        f = function (n) {
                            var i = u.css("background-image").replace(/url\((['"])?(.*?)\1\)/gi, "$2"),
                                t = new Image();
                            t.onload = function () {
                                var i = t.width,
                                    r = t.height;
                                n(i, r);
                            };
                            t.src = i;
                        };
                    r ||
                        (u.data("animateSprite", {
                            settings: n.extend({ width: u.width(), height: u.height(), totalFrames: !1, columns: !1, fps: 12, complete: function () {}, loop: !1, autoplay: !0 }, t),
                            currentFrame: 0,
                            controlAnimation: function () {
                                var n = function (n, t) {
                                        return n++, n >= t ? (this.settings.loop === !0 ? ((n = 0), r.controlTimer()) : this.settings.complete()) : r.controlTimer(), n;
                                    },
                                    t,
                                    f;
                                if (this.settings.animations === i) u.animateSprite("frame", this.currentFrame), (this.currentFrame = n.call(this, this.currentFrame, this.settings.totalFrames));
                                else {
                                    if (this.currentAnimation === i)
                                        for (t in this.settings.animations) {
                                            this.currentAnimation = this.settings.animations[t];
                                            break;
                                        }
                                    f = this.currentAnimation[this.currentFrame];
                                    u.animateSprite("frame", f);
                                    this.currentFrame = n.call(this, this.currentFrame, this.currentAnimation.length);
                                }
                            },
                            controlTimer: function () {
                                var n = 1e3 / r.settings.fps;
                                r.settings.duration !== i && (n = r.settings.duration / r.settings.totalFrames);
                                r.interval = setTimeout(function () {
                                    r.controlAnimation();
                                }, n);
                            },
                        }),
                        (r = u.data("animateSprite")),
                        r.settings.columns
                            ? r.settings.autoplay && r.controlTimer()
                            : f(function (n, t) {
                                  if (((r.settings.columns = Math.round(n / r.settings.width)), !r.settings.totalFrames)) {
                                      var i = Math.round(t / r.settings.height);
                                      r.settings.totalFrames = r.settings.columns * i;
                                  }
                                  r.settings.autoplay && r.controlTimer();
                              }));
                });
            },
            s = function (t) {
                return this.each(function () {
                    if (n(this).data("animateSprite") !== i) {
                        var u = n(this),
                            r = u.data("animateSprite"),
                            f = Math.floor(t / r.settings.columns),
                            e = t % r.settings.columns;
                        u.css("background-position", -r.settings.width * e + "px " + -r.settings.height * f + "px");
                    }
                });
            },
            u = function () {
                return this.each(function () {
                    var t = n(this),
                        i = t.data("animateSprite");
                    clearTimeout(i.interval);
                });
            },
            f = function () {
                return this.each(function () {
                    var t = n(this),
                        i = t.data("animateSprite");
                    t.animateSprite("stopAnimation");
                    i.controlTimer();
                });
            },
            e = function () {
                return this.each(function () {
                    var t = n(this),
                        i = t.data("animateSprite");
                    t.animateSprite("stopAnimation");
                    i.currentFrame = 0;
                    i.controlTimer();
                });
            },
            h = function (t) {
                return this.each(function () {
                    var r = n(this),
                        i = r.data("animateSprite");
                    "string" == typeof t
                        ? (r.animateSprite("stopAnimation"), i.settings.animations[t] !== i.currentAnimation && ((i.currentFrame = 0), (i.currentAnimation = i.settings.animations[t])), i.controlTimer())
                        : (r.animateSprite("stopAnimation"), i.controlTimer());
                });
            },
            c = function (t) {
                return this.each(function () {
                    var i = n(this),
                        r = i.data("animateSprite");
                    r.settings.fps = t;
                });
            },
            r = { init: o, frame: s, stop: u, resume: f, restart: e, play: h, stopAnimation: u, resumeAnimation: f, restartAnimation: e, fps: c };
        n.fn.animateSprite = function (t) {
            return r[t] ? r[t].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof t && t ? (n.error("Method " + t + " does not exist on jQuery.animateSprite"), i) : r.init.apply(this, arguments);
        };
    })(jQuery, window),
    (function (n) {
        function i() {
            n("body").removeClass("stop-all-animate");
        }
        function r() {
            n("body").addClass("stop-all-animate");
        }
        var t;
        t = {
            onInt: function () {
                this.runAnnouncement(n(".announcement .text"));
                this.SlideSimple();
                this.Slotgames();
                this.PoupGuide();
                n(".back-to-top").click(function (t) {
                    return t.preventDefault(), n("html, body").animate({ scrollTop: 0 }, 500), !1;
                });
            },
            runAnnouncement: function (n) {
                n.length && n.marquee({ duration: 2e4, gap: 50, duplicated: !0, pauseOnHover: !0 }).css("visibility", "visible");
            },
            SlideSimple: function () {
                n(".mainSlider > .item").hide();
                n(".mainSlider > .item:eq(0)").show();
                setInterval(function () {
                    n(".mainSlider > .item:first").hide().next().show().end().appendTo(".mainSlider");
                }, 3e3);
            },
            Slotgames: function () {
                var i = n("#game_category_with_more");
                if (i.length > 0) {
                    var u = i.find(".main-category-item"),
                        t = n("#more_category_container"),
                        f = t.find(".dropdown-category-item");
                    function r() {
                        var o = i.width(),
                            e = 0,
                            s = t.outerWidth(),
                            r = !1;
                        t.removeClass("open active");
                        u.each(function (i, u) {
                            var h = n(u),
                                c = h.hasClass("active"),
                                l = h.outerWidth();
                            e += l;
                            r = r || e >= o;
                            r == !1 && e + s > o && ((r = !0), (e += s));
                            h.toggle(r == !1);
                            n(f[i]).toggle(r);
                            t.toggleClass("show-more", r);
                            r && c && t.addClass("active");
                        });
                    }
                    r();
                    i.css("visibility", "visible");
                    n(window).resize(function () {
                        clearTimeout(window.resizedFinished);
                        window.resizedFinished = setTimeout(function () {
                            r();
                        }, 1);
                    });
                }
            },
            PoupGuide: function () {
                n(".popup-content").magnificPopup({
                    removalDelay: 500,
                    modal: !0,
                    callbacks: {
                        beforeOpen: function () {
                            this.st.image.markup = this.st.image.markup.replace("mfp-figure", "mfp-figure mfp-with-anim");
                            this.st.mainClass = this.st.el.attr("data-effect");
                        },
                        open: function () {
                            n("html").addClass("mfpOverview");
                            n(".install-guide-popup").find(".owl-carousel").owlCarousel("invalidate", "width").owlCarousel("update");
                        },
                        close: function () {
                            n("html").removeClass("mfpOverview");
                        },
                    },
                    fixedBgPos: !0,
                });
                n(".tac-owl-carousel").owlCarousel({
                    navSpeed: 1e3,
                    dotsSpeed: 1e3,
                    dragEndSpeed: 1e3,
                    dots: !0,
                    items: 1,
                    margin: 0,
                    nav: !0,
                    navText: ['<img src="Themes/Joker/Partner/assets/images/prev.png" alt="title" />', '<img src="Themes/Joker/Partner/assets/images/next.png" alt="title" />'],
                });
                n(".popup-close").on("click", function () {
                    n.magnificPopup.close();
                });
                n(document).on("keydown", function (t) {
                    t.keyCode == 27 && n.magnificPopup.close();
                });
            },
        };
        window.startAnimate = i;
        window.stopAnimate = r;
        n(document).ready(function () {
            t.onInt();
        });
    })(jQuery);
