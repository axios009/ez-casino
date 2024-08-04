function calElmPos(c, e, f) {
  var b = _centerX,
    h = _centerY,
    y = e + f * _globalVars.config.distanceDeg;
  f = e + 20 + _globalVars.config.sliceWidth - _globalVars.config.borderSlice + f * _globalVars.config.distanceDeg;
  return {
    x1: b + c * Math.cos((Math.PI * y) / e),
    y1: h + c * Math.sin((Math.PI * y) / e),
    x2: b + c * Math.cos((Math.PI * f) / e),
    y2: h + c * Math.sin((Math.PI * f) / e),
  };
}

function turnOffFilters() {
  outerCircle.attr("filter", null);
  outerSpin.attr("filter", null);
  for (var c = 0; c < _lightOuterMem.length; c++) _lightOuterMem[c].element.attr("filter", null);
  for (c = 0; c < _globalVars.elms.innerLightArr.length; c++)
    _globalVars.elms.innerLightArr[c].element.attr("filter", null);
  for (c = 0; c < _globalVars.elms.textArr.length; c++) _globalVars.elms.textArr[c].attr("filter", null);
  shelfTop.attr("filter", null);
  shelfBot.attr("filter", null);
  outerNeedle.attr("filter", null);
  innerNeedle.attr("filter", null);
}

function turnOnFilters() {
  "undefined" === typeof _globalVars.config.graphicOption && (_globalVars.config.graphicOption = 0);
  1 <= _globalVars.config.graphicOption && (outerCircle.filter(setFilter(10, !1)), outerSpin.filter(setFilter(20, !1)));
  if (2 <= _globalVars.config.graphicOption)
    for (var c = 0; c < _lightOuterMem.length; c++) _lightOuterMem[c].element.filter(setFilter(2, !0));
  if (2 <= _globalVars.config.graphicOption)
    for (c = 0; c < _globalVars.elms.innerLightArr.length; c++)
      _globalVars.elms.innerLightArr[c].element.filter(setFilter(1, !1));
  if (1 <= _globalVars.config.graphicOption)
    for (c = 0; c < _globalVars.elms.textArr.length; c++) _globalVars.elms.textArr[c].filter(setFilter(10, !1));
  2 <= _globalVars.config.graphicOption &&
    (shelfTop.filter(setFilter(3, !1)),
    shelfBot.filter(setFilter(3, !1)),
    outerNeedle.filter(setFilter(3, !1)),
    innerNeedle.filter(setFilter(10, !1)));
}

function setFilter(c, e) {
  var f = new SVG.Filter(),
    b = f.offset(0, 0).gaussianBlur(c);
  f.blend(f.source, b);
  f.size("200%", "200%").move("-50%", "-50%");
  e &&
    b
      .animate({
        ease: "<",
      })
      .attr({
        stdDeviation: "9",
      })
      .loop(!0, !0);
  _globalVars.elms.filters.push(f);
  return f;
}

function renderImageReward(c, e, f, b) {
  var h = "data:image/png;base64," + _globalVars.jsonData[e].imageUrl,
    y = parseInt(_globalVars.config.totalSlices),
    l = 0;
  f -= _globalVars.config.sliceWidth;
  b -= _globalVars.config.sliceWidth;
  12 === y &&
    (0 === e && ((f += 0), (b += 15), (l = -90)),
    1 === e && ((f -= 0), (b += 15), (l = -55)),
    2 === e && ((f -= 0), (b += 15), (l = -35)),
    3 === e && ((f -= 10), (b += 15), (l = 0)),
    4 === e && ((f -= 10), (b += 15), (l = 35)),
    5 === e && ((f -= 10), (b += 15), (l = 55)),
    6 === e && ((f -= 10), (b += 15), (l = 90)),
    7 === e && ((f -= 10), (b += 15), (l = 115)),
    8 === e && ((f -= 10), (b += 0), (l = 140)),
    9 === e && ((f -= 10), (b += 0), (l = 180)),
    10 === e && ((f -= 10), (b += 0), (l = 215)),
    11 === e && ((f -= 0), (b += 15), (l = 240)));
  imgObj = c.image(h, 120);
  imgObj.move(f, b).rotate(l);
  _globalVars.elms.rewardImageGroup.add(imgObj);
}
var _animation = {
    outerLight: {
      on: function () {
        for (var c, e = 0; e < _lightOuterMem.length; e++)
          (c = 0.1 * e + "s"),
            "3" === _globalVars.config.wheelUX
              ? _lightOuterMem[e].element
                  .animate({
                    ease: "<",
                    delay: c,
                  })
                  .fill("#c9658f")
                  .loop(!0, !0)
              : _lightOuterMem[e].element
                  .animate({
                    ease: "<",
                    delay: c,
                  })
                  .fill("#CD0802")
                  .loop(!0, !0);
      },
      off: function () {
        for (var c = 0; c < _lightOuterMem.length; c++)
          "3" === _globalVars.config.wheelUX && _lightOuterMem[c].element.finish().fill("#ffa000"),
            "2" === _globalVars.config.wheelUX && _lightOuterMem[c].element.finish().fill("#F4F4F4"),
            ("0" !== _globalVars.config.wheelUX && "1" !== _globalVars.config.wheelUX) ||
              _lightOuterMem[c].element.finish().fill("#FFFFB0");
      },
    },
  },
  _globalVars,
  _width = 800,
  _height = 800,
  _centerX = _width / 2,
  _centerY = _height / 2,
  mFilter = new SVG.Filter();
mFilter.offset(0, 0).gaussianBlur(10);
mFilter.blend(mFilter.source, blur);
mFilter.size("200%", "200%").move("-50%", "-50%");
var lgFilter = new SVG.Filter();
lgFilter.offset(0, 0).gaussianBlur(20);
lgFilter.blend(mFilter.source, blur);
lgFilter.size("200%", "200%").move("-50%", "-50%");
var cachedKey = "ghfjghdsjhf" + window.location.hostname;

function drawGraphic(rewardItem) {
  var c = SVG("drawing");
  c.viewbox({
    x: 0,
    y: 0,
    width: _width,
    height: _height,
  }).attr("id", "viewBox");
  document.getElementById("viewBox").style.height = "auto";
  document.getElementById("viewBox").style.width = 30 + "vh";
  _globalVars = {
    isProcessing: !1,
    coords: {
      clientX: null,
      clientY: null,
    },
    config: {
      wheelUX: "1",
      totalSlices: 12,
      distanceDeg: 45,
      defaultStartDeg: null,
      borderSlice: 5,
      sliceWidth: 40,
      graphicOption: 1,
      brandLogo: logo,
      backgroundColor: "#337ab7",
      allowSound: !0,
    },
    elms: {
      container: c.group(),
      pizza: c.group(),
      pizzaArr: [],
      outerLight: c.group(),
      innerLight: c.group(),
      innerLightArr: [],
      spin: c.group(),
      needle: c.group(),
      text: c.group(),
      textArr: [],
      rotateGroup: c.group(),
      rewardImageGroup: c.group(),
      filters: [],
    },
    jsonData: rewardItem,
  };

  // for (var e = 0; e < _globalVars.jsonData.length; e++) {
  //
  //                    _globalVars.jsonData[e].imageUrl = "img/reward" + e + ".png";
  //                    console.log(_globalVars.jsonData[e]);
  ////                    console.log(jsonData);
  //                }
  "undefined" !== typeof _dynamicParams &&
    ((_globalVars.config = _dynamicParams.config), (_globalVars.jsonData = _dynamicParams.jsonData));
  _globalVars.evt = document.createEvent("Event");
  _globalVars.evt.initEvent("onRedeemCompleted", !0, !0);
  _globalVars.config.defaultStartDeg = (_globalVars.config.totalSlices / 2) * _globalVars.config.distanceDeg;
  if ("4" === _globalVars.config.wheelUX) {
    var f = c.gradient("linear", function (a) {
      a.at(0, "#222222");
      a.at(1, "#333333");
    });
    outerCircle = c.circle(_width - 30).move(15, 15);
    outerCircle.fill(f);
    f = c.circle("100%").attr({
      fill: "#E8DA9F",
    });
    f.radius("45%");
    outerSpin = c.circle("100%").attr({
      fill: "#23051D",
    });
    var b = c.gradient("radial", function (a) {
      a.at(0, "#FFFFFF");
      a.at(1, "#4E82CB");
    });
  }
  "3" === _globalVars.config.wheelUX &&
    ((f = c.gradient("linear", function (a) {
      a.at(0, "#ffa000");
      a.at(1, "#ffa000");
    })),
    (outerCircle = c.circle(_width - 30).move(15, 15)),
    outerCircle.fill(f),
    (f = c.circle("100%").attr({
      fill: "#ffa000",
    })),
    f.radius("45%"),
    (outerSpin = c.circle("100%").attr({
      fill: "#23051D",
    })),
    (b = c.gradient("radial", function (a) {
      a.at(0, "#ffa000");
      a.at(1, "#ffa");
    })));
  "2" === _globalVars.config.wheelUX &&
    ((f = c.gradient("linear", function (a) {
      a.at(0, "#3E192A");
      a.at(1, "#2E0928");
    })),
    (outerCircle = c.circle(_width - 30).move(15, 15)),
    outerCircle.fill(f),
    (f = c.circle("100%").attr({
      fill: "#666",
    })),
    f.radius("45%"),
    (outerSpin = c.circle("100%").attr({
      fill: "#23051D",
    })),
    (b = c.gradient("radial", function (a) {
      a.at(0, "#420D39");
      a.at(1, "#23051D");
    })));
  "1" === _globalVars.config.wheelUX &&
    ((f = c.gradient("linear", function (a) {
      a.at(0, "#E8DA9F");
      a.at(1, "#E8DA9F");
    })),
    (outerCircle = c.circle(_width - 30).move(15, 15)),
    outerCircle.fill(f),
    (f = c.circle("100%").attr({
      fill: "#E8DA9F",
    })),
    f.radius("45%"),
    (outerSpin = c.circle("100%").attr({
      fill: "#23051D",
    })),
    (b = c.gradient("radial", function (a) {
      a.at(0, "#E8DA9F");
      a.at(1, "#000000");
    })));
  "0" === _globalVars.config.wheelUX &&
    ((f = c.gradient("linear", function (a) {
      a.at(0, "#3E192A");
      a.at(1, "#2E0928");
    })),
    (outerCircle = c.circle(_width - 30).move(15, 15)),
    outerCircle.fill(f),
    (f = c.circle("100%").attr({
      fill: "#666",
    })),
    f.radius("45%"),
    (outerSpin = c.circle("100%").attr({
      fill: "#23051D",
    })),
    (b = c.gradient("radial", function (a) {
      a.at(0, "#420D39");
      a.at(1, "#23051D");
    })));
  b.from(0.5, 0).to(0.5, 0).radius(0.4);
  outerSpin.radius("14%");
  outerSpin.fill(b);
  "4" === _globalVars.config.wheelUX
    ? ((innerSpin = c.circle("100%").attr({
        fill: "#501245",
      })),
      (e = c.gradient("linear", function (a) {
        a.at(0, "#FFFFFF");
        a.at(1, "#4E82CB");
      })))
    : ((innerSpin = c.circle("100%").attr({
        fill: "#501245",
      })),
      (e = c.gradient("linear", function (a) {
        a.at(0, "#23051D");
        a.at(1, "#521246");
      })));
  e.from(0, 0.5).to(0, 1);
  innerSpin.radius("10%");
  innerSpin.fill(e);
  spinLabel = c.text("SPIN");
  spinLabel.font({
    size: 0,
    fill: "#fff",
  });
  spinLabel.move("42%", "44%");
  spinImage = c.image(_globalVars.config.brandLogo, 160);
  spinImage.move(_centerX / 1.27, _centerY / 1.26);
  _lightOuterMem = [];
  if (12 >= parseInt(_globalVars.config.totalSlices) && "4" !== _globalVars.config.wheelUX)
    for (var h = 0; h < 2 * _globalVars.config.totalSlices; h++)
      (e = calElmPos(_width / 2.08, 2 * _globalVars.config.defaultStartDeg, h)),
        (e =
          "3" === _globalVars.config.wheelUX
            ? c
                .ellipse(30, 30)
                .fill("#ffa")
                .move(e.x1 - 15, e.y1 - 15)
                .attr("id", h)
            : "2" === _globalVars.config.wheelUX
            ? c
                .ellipse(30, 30)
                .fill("#F4F4F4")
                .move(e.x1 - 15, e.y1 - 15)
                .attr("id", h)
            : c
                .ellipse(30, 30)
                .fill("#FFFFB0")
                .move(e.x1 - 15, e.y1 - 15)
                .attr("id", h)),
        _lightOuterMem.push({
          element: e,
          filter: blur,
        }),
        _globalVars.elms.outerLight.add(e);
  for (h = 0; h < _globalVars.config.totalSlices; h++) {
    b = "M" + _centerX + "," + _centerY + " ";
    var y = _width / 2.2;
    e = calElmPos(y, _globalVars.config.defaultStartDeg, h);
    e = c.path(b + "L" + e.x1 + "," + e.y1 + " A" + y + "," + y + " 0 0,1 " + e.x2 + "," + e.y2 + " z");
    var l = "";
    "4" === _globalVars.config.wheelUX &&
      ((l =
        0 === h || 0 === h % 2
          ? c.gradient("linear", function (a) {
              a.at(0, "#4E82CB");
              a.at(1, "#2D66C4");
            })
          : c.gradient("radial", function (a) {
              a.at(0, "#FFFFFF");
              a.at(1, "#FFFFFF");
            })),
      e.fill(l),
      5 === parseInt(_globalVars.config.totalSlices) &&
        ((l = c.gradient("linear", function (a) {
          a.at(0, "#FFFFFF");
          a.at(1, "#FFFFFF");
        })),
        e.fill(l)),
      e.stroke({
        color: "#222222",
        width: 1,
        linecap: "round",
        linejoin: "round",
      }));
    "3" === _globalVars.config.wheelUX &&
      e.stroke({
        color: "#212121",
        width: 1,
        linecap: "round",
        linejoin: "round",
      });
    "2" === _globalVars.config.wheelUX &&
      ((l =
        0 === h || 0 === h % 2
          ? c.gradient("linear", function (a) {
              a.at(0, "#EA352F");
              a.at(1, "#222222");
            })
          : c.gradient("radial", function (a) {
              a.at(0, "#FFFFFF");
              a.at(1, "#FFFFFF");
            })),
      e.fill(l),
      5 === parseInt(_globalVars.config.totalSlices) &&
        ((l = c.gradient("linear", function (a) {
          a.at(0, "blue");
          a.at(1, "#fb3");
        })),
        e.fill(l)),
      e.stroke({
        color: "#320E34",
        width: 1,
        linecap: "round",
        linejoin: "round",
      }));
    "1" === _globalVars.config.wheelUX &&
      ((l =
        0 === h || 0 === h % 2
          ? c.gradient("linear", function (a) {
              a.at(0, "#161313");
              a.at(1, "#222222");
            })
          : c.gradient("radial", function (a) {
              a.at(0, "#E8DA9F");
              a.at(1, "#C8AB68");
            })),
      e.fill(l),
      5 === parseInt(_globalVars.config.totalSlices) &&
        ((l = c.gradient("linear", function (a) {
          a.at(0, "#E8DA9F");
          a.at(1, "#C8AB68");
        })),
        e.fill(l)),
      e.stroke({
        color: "#E8DA9F",
        width: 1,
        linecap: "round",
        linejoin: "round",
      }));
    "0" === _globalVars.config.wheelUX &&
      ((l =
        0 === h ||
        4 === h ||
        8 === h ||
        12 === h ||
        16 === h ||
        20 === h ||
        24 === h ||
        28 === h ||
        32 === h ||
        36 === h
          ? c.gradient("radial", function (a) {
              a.at(0, "#D80001");
              a.at(1, "#BC1505");
            })
          : 1 === h || 5 === h || 9 === h || 13 === h || 17 === h || 21 === h || 25 === h || 29 === h || 33 === h
          ? c.gradient("linear", function (a) {
              a.at(0, "#04756F");
              a.at(1, "#045E5C");
            })
          : 2 === h || 6 === h || 10 === h || 14 === h || 18 === h || 22 === h || 10 === h || 10 === h || 10 === h
          ? c.gradient("linear", function (a) {
              a.at(0, "#FF8B00");
              a.at(1, "#D37201");
            })
          : 36 !== parseInt(_globalVars.config.totalSlices) || (27 !== h && 31 !== h && 34 !== h)
          ? c.gradient("radial", function (a) {
              a.at(0, "#400B35");
              a.at(1, "#320B28");
            })
          : c.gradient("radial", function (a) {
              a.at(0, "#333333");
              a.at(1, "#666666");
            })),
      e.fill(l),
      e.stroke({
        color: "#320E34",
        width: 1,
        linecap: "round",
        linejoin: "round",
      }));
    _globalVars.elms.pizza.add(e);
    _globalVars.elms.pizzaArr.push({
      element: e,
      fill: l,
    });
    b = e = e = e = "";
    if ("0" === _globalVars.config.wheelUX && 12 >= parseInt(_globalVars.config.totalSlices))
      for (b = 0; 5 > b; b++)
        (e = _width / 2.5 - 40 * b),
          (e = calElmPos(e, _globalVars.config.defaultStartDeg, h)),
          (e = c
            .ellipse(16, 16)
            .fill("#FFFFB0")
            .move(e.x1 - 8, e.y1 - 8)),
          e.attr("id", b),
          _globalVars.elms.innerLightArr.push({
            element: e,
            filter: blur,
          }),
          5 === parseInt(_globalVars.config.totalSlices) && e.opacity(0),
          _globalVars.elms.innerLight.add(e);
  }
  _globalVars.elms.container.add(_globalVars.elms.pizza);
  for (h = 0; h < _globalVars.config.totalSlices; h++) {
    e = _width / 2.8;
    e = calElmPos(e, _globalVars.config.defaultStartDeg, h);
    36 === parseInt(_globalVars.config.totalSlices)
      ? ((e.x1 -= 15), (e.y1 -= 13))
      : (5 === parseInt(_globalVars.config.totalSlices) ? ((e.x1 += 10), (e.y1 -= 35)) : ((e.x1 = e.x1), (e.y1 -= 20)),
        _globalVars.jsonData[h].value.indexOf(" "));
    "4" === _globalVars.config.wheelUX &&
      ((l =
        0 === h || 0 === h % 2
          ? c.gradient("linear", function (a) {
              a.at(0, "#222222");
              a.at(1, "#333333");
            })
          : c.gradient("linear", function (a) {
              a.at(0, "#F1F1F1");
              a.at(1, "#F4F4F4");
            })),
      5 === parseInt(_globalVars.config.totalSlices) &&
        (l = c.gradient("linear", function (a) {
          a.at(0, "#EB3323");
          a.at(1, "#FF8B00");
        })));
    "3" === _globalVars.config.wheelUX &&
      (0 === h &&
        (l = c.gradient("linear", function (a) {
          a.at(0, "#f6546a");
          a.at(1, "#f6546a");
        })),
      1 === h &&
        (l = c.gradient("linear", function (a) {
          a.at(0, "#2bfe72");
          a.at(1, "#2bfe72");
        })),
      2 === h &&
        (l = c.gradient("linear", function (a) {
          a.at(0, "#ffff00");
          a.at(1, "#ffff00");
        })),
      3 === h &&
        (l = c.gradient("linear", function (a) {
          a.at(0, "#ffffff");
          a.at(1, "#ffffff");
        })),
      4 === h &&
        (l = c.gradient("linear", function (a) {
          a.at(0, "#FFA500");
          a.at(1, "#FFA500");
        })),
      5 === h &&
        (l = c.gradient("linear", function (a) {
          a.at(0, "#CD853F");
          a.at(1, "#CD853F");
        })),
      6 === h &&
        (l = c.gradient("linear", function (a) {
          a.at(0, "#0080ff");
          a.at(1, "#0080ff");
        })),
      7 === h &&
        (l = c.gradient("linear", function (a) {
          a.at(0, "#b2fbbb");
          a.at(1, "#b2fbbb");
        })),
      8 === h &&
        (l = c.gradient("linear", function (a) {
          a.at(0, "#c9658f");
          a.at(1, "#c9658f");
        })),
      9 === h &&
        (l = c.gradient("linear", function (a) {
          a.at(0, "#666");
          a.at(1, "#ddd");
        })),
      10 === h &&
        (l = c.gradient("linear", function (a) {
          a.at(0, "#987dc5");
          a.at(1, "#987dc5");
        })),
      11 === h &&
        (l = c.gradient("linear", function (a) {
          a.at(0, "#e0eeee");
          a.at(1, "#838b8b");
        })));
    "2" === _globalVars.config.wheelUX &&
      (l =
        0 === h || 0 === h % 2
          ? c.gradient("linear", function (a) {
              a.at(0, "#222222");
              a.at(1, "#333333");
            })
          : c.gradient("linear", function (a) {
              a.at(0, "#F1F1F1");
              a.at(1, "#F4F4F4");
            }));
    "1" === _globalVars.config.wheelUX &&
      (l =
        0 === h || 0 === h % 2
          ? c.gradient("linear", function (a) {
              a.at(0, "#FFFFFF");
              a.at(1, "#F4F4F4");
            })
          : c.gradient("linear", function (a) {
              a.at(0, "#EB3323");
              a.at(1, "#FF8B00");
            }));
    "0" === _globalVars.config.wheelUX &&
      (l = c.gradient("linear", function (a) {
        a.at(0, "#F1F1F1");
        a.at(1, "#F4F4F4");
      }));
    if (12 >= parseInt(_globalVars.config.totalSlices))
      if (-1 < _globalVars.jsonData[h].value.indexOf(" ")) {
        var B = _globalVars.jsonData[h].value.split(" ");
        b = c.text(function (a) {
          for (var m = 0; m < B.length; m++)
            a.tspan(B[m]).newLine(),
              a.font({
                size: 24,
                fill: l,
                anchor: "middle",
              });
        });
        4 < _globalVars.jsonData[h].value.length && ((e.x1 = e.x1), (e.y1 = e.y1));
      } else
        b =
          "3" === _globalVars.config.wheelUX
            ? c.text(function (a) {
                a.tspan(_globalVars.jsonData[h].value).font({
                  size: 22,
                  fill: l,
                  anchor: "middle",
                });
              })
            : c.text(function (a) {
                a.tspan(_globalVars.jsonData[h].value).font({
                  size: 30,
                  fill: l,
                  anchor: "middle",
                });
              });
    else
      b = c.text(function (a) {
        a.tspan(_globalVars.jsonData[h].value).font({
          size: 20,
          fill: l,
        });
      });
    b.rotate(0).move(e.x1, e.y1);
    12 >= parseInt(_globalVars.config.totalSlices) && (b.opacity(0), renderImageReward(c, h, e.x1, e.y1));
    if (36 === parseInt(_globalVars.config.totalSlices))
      switch (h) {
        case 0:
          b.rotate(-90);
          break;
        case 1:
          b.rotate(-80);
          break;
        case 2:
          b.rotate(-70);
          break;
        case 3:
          b.rotate(-60);
          break;
        case 4:
          b.rotate(-50);
          break;
        case 5:
          b.rotate(-40);
          break;
        case 6:
          b.rotate(-30);
          break;
        case 7:
          b.rotate(-20);
          break;
        case 8:
          b.rotate(-10);
          break;
        case 9:
          b.rotate(0);
          break;
        case 10:
          b.rotate(10);
          break;
        case 11:
          b.rotate(20);
          break;
        case 12:
          b.rotate(30);
          break;
        case 13:
          b.rotate(40);
          break;
        case 14:
          b.rotate(50);
          break;
        case 15:
          b.rotate(60);
          break;
        case 16:
          b.rotate(70);
          break;
        case 17:
          b.rotate(80);
          break;
        case 18:
          b.rotate(90);
          break;
        case 19:
          b.rotate(100);
          break;
        case 20:
          b.rotate(110);
          break;
        case 21:
          b.rotate(120);
          break;
        case 22:
          b.rotate(130);
          break;
        case 23:
          b.rotate(140);
          break;
        case 24:
          b.rotate(150);
          break;
        case 25:
          b.rotate(160);
          break;
        case 26:
          b.rotate(170);
          break;
        case 27:
          b.rotate(180);
          break;
        case 28:
          b.rotate(190);
          break;
        case 29:
          b.rotate(200);
          break;
        case 30:
          b.rotate(210);
          break;
        case 31:
          b.rotate(220);
          break;
        case 32:
          b.rotate(230);
          break;
        case 33:
          b.rotate(240);
          break;
        case 34:
          b.rotate(250);
          break;
        case 35:
          b.rotate(260);
          break;
        default:
          b.rotate(0);
      }
    if (12 === parseInt(_globalVars.config.totalSlices))
      switch (h) {
        case 0:
          b.rotate(-90);
          break;
        case 1:
          b.rotate(-60);
          break;
        case 2:
          b.rotate(-30);
          break;
        case 3:
          b.rotate(0);
          break;
        case 4:
          b.rotate(30);
          break;
        case 5:
          b.rotate(60);
          break;
        case 6:
          b.rotate(90);
          break;
        case 7:
          b.rotate(120);
          break;
        case 8:
          b.rotate(150);
          break;
        case 9:
          b.rotate(180);
          break;
        case 10:
          b.rotate(210);
          break;
        case 11:
          b.rotate(240);
          break;
        default:
          b.rotate(0);
      }
    if (10 === parseInt(_globalVars.config.totalSlices))
      switch (h) {
        case 0:
          b.rotate(-90);
          break;
        case 1:
          b.rotate(-55);
          break;
        case 2:
          b.rotate(-20);
          break;
        case 3:
          b.rotate(15);
          break;
        case 4:
          b.rotate(55);
          break;
        case 5:
          b.rotate(90);
          break;
        case 6:
          b.rotate(125);
          break;
        case 7:
          b.rotate(160);
          break;
        case 8:
          b.rotate(195);
          break;
        case 9:
          b.rotate(230);
          break;
        default:
          b.rotate(0);
      }
    if (8 === parseInt(_globalVars.config.totalSlices))
      switch (h) {
        case 0:
          b.rotate(-90);
          break;
        case 1:
          b.rotate(-45);
          break;
        case 2:
          b.rotate(0);
          break;
        case 3:
          b.rotate(45);
          break;
        case 4:
          b.rotate(90);
          break;
        case 5:
          b.rotate(135);
          break;
        case 6:
          b.rotate(180);
          break;
        case 7:
          b.rotate(225);
          break;
        default:
          b.rotate(0);
      }
    if (5 === parseInt(_globalVars.config.totalSlices))
      switch (h) {
        case 0:
          b.rotate(-92);
          break;
        case 1:
          b.rotate(-20);
          break;
        case 2:
          b.rotate(52);
          break;
        case 3:
          b.rotate(122);
          break;
        case 4:
          b.rotate(195);
          break;
        default:
          b.rotate(0);
      }
    _globalVars.elms.text.add(b);
    _globalVars.elms.textArr.push(b);
  }
  shelfTop = c.rect(130, 70);
  shelfTop.cx(_centerX);
  shelfTop.cy(0);
  shelfTop.radius(10);
  l =
    "3" === _globalVars.config.wheelUX
      ? c.gradient("linear", function (a) {
          a.at(0, "#fb3");
          a.at(0.1, "#ffa000");
          a.at(0.5, "#ffa000");
          a.at(0.9, "#ffa000");
          a.at(1, "#fb3");
        })
      : c.gradient("linear", function (a) {
          a.at(0, "#B3B4B6");
          a.at(0.1, "#EAEAEA");
          a.at(0.5, "#E6E7E9");
          a.at(0.9, "#EAEAEA");
          a.at(1, "#B3B4B6");
        });
  shelfTop.fill(l);
  shelfTop.stroke({
    color: l,
    width: 10,
    linecap: "round",
    linejoin: "round",
  });
  "1" === _globalVars.config.wheelUX && shelfTop.opacity(0);
  shelfBot = c.path("M 20 0 L 180 0 L 200 80  L 260 110 L -60 110 L 0 80 Z");
  shelfBot.cx(_centerX);
  shelfBot.cy(_height + 20);
  l = c.gradient("linear", function (a) {
    a.at(0, "#BDBDBD");
    a.at(0.25, "#E2E1DF");
    a.at(0.5, "#C0C0C0");
    a.at(0.8, "#5D5D5D");
    a.at(1, "#E2E1DF");
  });
  l.from(0, 0).to(0, 1);
  shelfBot.fill(l);
  shelfBot.stroke({
    color: l,
    width: 10,
    linecap: "round",
    linejoin: "round",
  });
  "3" === _globalVars.config.wheelUX && shelfBot.opacity(0);
  "1" === _globalVars.config.wheelUX && shelfBot.opacity(0);
  outerNeedle = c.polygon("0,0 100,0 50,100");
  outerNeedle.cx(_centerX);
  outerNeedle.cy(30);
  outerNeedle.size(100, 70);
  "4" === _globalVars.config.wheelUX &&
    (l = c.gradient("radial", function (a) {
      a.at(0, "#F0F0F0");
      a.at(1, "#A0A0A0");
    }));
  "3" === _globalVars.config.wheelUX &&
    (l = c.gradient("radial", function (a) {
      a.at(0, "#c9658f");
      a.at(1, "#222222");
    }));
  "2" === _globalVars.config.wheelUX &&
    (l = c.gradient("radial", function (a) {
      a.at(0, "#FFFFFF");
      a.at(1, "#222222");
    }));
  "1" === _globalVars.config.wheelUX &&
    (l = c.gradient("radial", function (a) {
      a.at(0, "#A0A0A0");
      a.at(1, "#E8DA9F");
    }));
  "0" === _globalVars.config.wheelUX &&
    (l = c.gradient("radial", function (a) {
      a.at(0, "#F0F0F0");
      a.at(1, "#A0A0A0");
    }));
  outerNeedle.fill(l);
  outerNeedle.stroke({
    color: l,
    width: 10,
    linecap: "round",
    linejoin: "round",
  });
  innerNeedle = c.polygon("0,0 60,0 30,60");
  innerNeedle.cx(_centerX);
  innerNeedle.cy(10);
  innerNeedle.size(60, 50);
  "3" === _globalVars.config.wheelUX && innerNeedle.fill("#2bfe72");
  "2" === _globalVars.config.wheelUX && innerNeedle.fill("#F2F2F2");
  "1" === _globalVars.config.wheelUX && innerNeedle.fill("#EB3323");
  "" === _globalVars.config.wheelUX && innerNeedle.fill("#FFFFFF");
  _globalVars.elms.spin.add(outerSpin);
  _globalVars.elms.spin.add(innerSpin);
  _globalVars.elms.spin.add(spinLabel);
  _globalVars.elms.spin.add(spinImage);
  _globalVars.elms.needle.add(outerNeedle);
  _globalVars.elms.needle.add(innerNeedle);
  _globalVars.elms.container.add(shelfTop);
  _globalVars.elms.container.add(shelfBot);
  _globalVars.elms.container.add(outerCircle);
  _globalVars.elms.container.add(f);
  _globalVars.elms.container.add(_globalVars.elms.outerLight);
  _globalVars.elms.rotateGroup.add(_globalVars.elms.pizza);
  _globalVars.elms.rotateGroup.add(_globalVars.elms.innerLight);
  _globalVars.elms.rotateGroup.add(_globalVars.elms.text);
  _globalVars.elms.container.add(_globalVars.elms.rotateGroup);
  _globalVars.elms.rotateGroup.add(_globalVars.elms.rewardImageGroup);
  _globalVars.elms.container.add(_globalVars.elms.spin);
  _globalVars.elms.container.add(_globalVars.elms.needle);
  turnOnFilters();
  _globalVars.elms.spin
    .children()[3]
    .animate()
    .size(140)
    .move(_centerX / 1.23, _centerY / 1.22)
    .loop(!0, !0);
  _globalVars.elms.spin.style("cursor", "pointer");
  _globalVars.elms.pizza.rotate(105);
  _globalVars.elms.innerLight.rotate(105);
  36 === parseInt(_globalVars.config.totalSlices) &&
    (_globalVars.elms.pizza.rotate(95), _globalVars.elms.innerLight.rotate(95));
  switch (parseInt(_globalVars.config.totalSlices)) {
    case 36:
      _globalVars.elms.rotateGroup.rotate(0);
      _globalVars.elms.text.rotate(90);
      break;
    case 12:
      _globalVars.elms.rotateGroup.rotate(0);
      _globalVars.elms.text.rotate(90);
      _globalVars.elms.rewardImageGroup.rotate(90);
      break;
    case 10:
      _globalVars.elms.rotateGroup.rotate(3);
      _globalVars.elms.text.rotate(87);
      _globalVars.elms.rewardImageGroup.rotate(90);
      break;
    case 8:
      _globalVars.elms.rotateGroup.rotate(7);
      _globalVars.elms.text.rotate(83);
      break;
    case 5:
      _globalVars.elms.rotateGroup.rotate(20), _globalVars.elms.text.rotate(72);
  }
}

//var callback = function () {
////    console.log('callback_layout_tag')
////    setTimeout(function () {
////        drawLuckWheel();
////        loadEvents()
////    }, 500)
//
//    $.ajax({
//        type: 'POST',
//        url: contextPath + cVersion + '/LuckyWheel/InquiryReward',
//        data: {"data": "test"},
//        dataType: 'json',
//        cache: false,
//        beforeSend: function () {
//            console.log('api req')
//        },
//        success: function (data) {
//            console.log('api req success');
////            drawLuckWheel();
////            loadEvents();
//            if (isSuccess(data)) {
//                unblockui();
//            } else {
//                unblockui();
//            }
//        },
//        error: function (data) {
//            drawLuckWheel();
//            loadEvents();
//            unblockui();
//            ;
//        }
//
//    });
//
//};

function decryptedAES(c) {
  var e = CryptoJS.enc.Base64.parse("7C3253DCF7320050GH677D159AB03DBB"),
    f = CryptoJS.enc.Base64.parse("7C3253DCF7320050GH677D159AB03DBB");
  return CryptoJS.AES.decrypt(c, e, {
    iv: f,
  }).toString(CryptoJS.enc.Utf8);
}

//"complete" === document.readyState || "loading" !== document.readyState && !document.documentElement.doScroll ? callback() : document.addEventListener("DOMContentLoaded", callback);
