var CryptoJS =
  CryptoJS ||
  (function (d, g) {
    var e = {},
      q = (e.lib = {}),
      x = function () {},
      u = (q.Base = {
        extend: function (b) {
          x.prototype = this;
          var k = new x();
          b && k.mixIn(b);
          k.hasOwnProperty("init") ||
            (k.init = function () {
              k.$super.init.apply(this, arguments);
            });
          k.init.prototype = k;
          k.$super = this;
          return k;
        },
        create: function () {
          var b = this.extend();
          b.init.apply(b, arguments);
          return b;
        },
        init: function () {},
        mixIn: function (b) {
          for (var k in b) b.hasOwnProperty(k) && (this[k] = b[k]);
          b.hasOwnProperty("toString") && (this.toString = b.toString);
        },
        clone: function () {
          return this.init.prototype.extend(this);
        },
      }),
      y = (q.WordArray = u.extend({
        init: function (b, k) {
          b = this.words = b || [];
          this.sigBytes = k != g ? k : 4 * b.length;
        },
        toString: function (b) {
          return (b || A).stringify(this);
        },
        concat: function (b) {
          var k = this.words,
            a = b.words,
            c = this.sigBytes;
          b = b.sigBytes;
          this.clamp();
          if (c % 4)
            for (var f = 0; f < b; f++)
              k[(c + f) >>> 2] |= ((a[f >>> 2] >>> (24 - (f % 4) * 8)) & 255) << (24 - ((c + f) % 4) * 8);
          else if (65535 < a.length) for (f = 0; f < b; f += 4) k[(c + f) >>> 2] = a[f >>> 2];
          else k.push.apply(k, a);
          this.sigBytes += b;
          return this;
        },
        clamp: function () {
          var b = this.words,
            k = this.sigBytes;
          b[k >>> 2] &= 4294967295 << (32 - (k % 4) * 8);
          b.length = d.ceil(k / 4);
        },
        clone: function () {
          var b = u.clone.call(this);
          b.words = this.words.slice(0);
          return b;
        },
        random: function (b) {
          for (var k = [], a = 0; a < b; a += 4) k.push((4294967296 * d.random()) | 0);
          return new y.init(k, b);
        },
      })),
      z = (e.enc = {}),
      A = (z.Hex = {
        stringify: function (b) {
          var k = b.words;
          b = b.sigBytes;
          for (var a = [], c = 0; c < b; c++) {
            var f = (k[c >>> 2] >>> (24 - (c % 4) * 8)) & 255;
            a.push((f >>> 4).toString(16));
            a.push((f & 15).toString(16));
          }
          return a.join("");
        },
        parse: function (b) {
          for (var k = b.length, a = [], c = 0; c < k; c += 2)
            a[c >>> 3] |= parseInt(b.substr(c, 2), 16) << (24 - (c % 8) * 4);
          return new y.init(a, k / 2);
        },
      }),
      h = (z.Latin1 = {
        stringify: function (b) {
          var k = b.words;
          b = b.sigBytes;
          for (var a = [], c = 0; c < b; c++) a.push(String.fromCharCode((k[c >>> 2] >>> (24 - (c % 4) * 8)) & 255));
          return a.join("");
        },
        parse: function (b) {
          for (var k = b.length, a = [], c = 0; c < k; c++) a[c >>> 2] |= (b.charCodeAt(c) & 255) << (24 - (c % 4) * 8);
          return new y.init(a, k);
        },
      }),
      w = (z.Utf8 = {
        stringify: function (b) {
          try {
            return decodeURIComponent(escape(h.stringify(b)));
          } catch (k) {
            throw Error("Malformed UTF-8 data");
          }
        },
        parse: function (b) {
          return h.parse(unescape(encodeURIComponent(b)));
        },
      }),
      m = (q.BufferedBlockAlgorithm = u.extend({
        reset: function () {
          this._data = new y.init();
          this._nDataBytes = 0;
        },
        _append: function (b) {
          "string" == typeof b && (b = w.parse(b));
          this._data.concat(b);
          this._nDataBytes += b.sigBytes;
        },
        _process: function (b) {
          var k = this._data,
            a = k.words,
            c = k.sigBytes,
            f = this.blockSize,
            v = c / (4 * f);
          v = b ? d.ceil(v) : d.max((v | 0) - this._minBufferSize, 0);
          b = v * f;
          c = d.min(4 * b, c);
          if (b) {
            for (var B = 0; B < b; B += f) this._doProcessBlock(a, B);
            B = a.splice(0, b);
            k.sigBytes -= c;
          }
          return new y.init(B, c);
        },
        clone: function () {
          var b = u.clone.call(this);
          b._data = this._data.clone();
          return b;
        },
        _minBufferSize: 0,
      }));
    q.Hasher = m.extend({
      cfg: u.extend(),
      init: function (b) {
        this.cfg = this.cfg.extend(b);
        this.reset();
      },
      reset: function () {
        m.reset.call(this);
        this._doReset();
      },
      update: function (b) {
        this._append(b);
        this._process();
        return this;
      },
      finalize: function (b) {
        b && this._append(b);
        return this._doFinalize();
      },
      blockSize: 16,
      _createHelper: function (b) {
        return function (k, a) {
          return new b.init(a).finalize(k);
        };
      },
      _createHmacHelper: function (b) {
        return function (k, a) {
          return new t.HMAC.init(b, a).finalize(k);
        };
      },
    });
    var t = (e.algo = {});
    return e;
  })(Math);
(function () {
  var d = CryptoJS,
    g = d.lib.WordArray;
  d.enc.Base64 = {
    stringify: function (e) {
      var q = e.words,
        x = e.sigBytes,
        u = this._map;
      e.clamp();
      e = [];
      for (var y = 0; y < x; y += 3)
        for (
          var z =
              (((q[y >>> 2] >>> (24 - (y % 4) * 8)) & 255) << 16) |
              (((q[(y + 1) >>> 2] >>> (24 - ((y + 1) % 4) * 8)) & 255) << 8) |
              ((q[(y + 2) >>> 2] >>> (24 - ((y + 2) % 4) * 8)) & 255),
            A = 0;
          4 > A && y + 0.75 * A < x;
          A++
        )
          e.push(u.charAt((z >>> (6 * (3 - A))) & 63));
      if ((q = u.charAt(64))) for (; e.length % 4; ) e.push(q);
      return e.join("");
    },
    parse: function (e) {
      var q = e.length,
        x = this._map,
        u = x.charAt(64);
      u && ((u = e.indexOf(u)), -1 != u && (q = u));
      u = [];
      for (var y = 0, z = 0; z < q; z++)
        if (z % 4) {
          var A = x.indexOf(e.charAt(z - 1)) << ((z % 4) * 2),
            h = x.indexOf(e.charAt(z)) >>> (6 - (z % 4) * 2);
          u[y >>> 2] |= (A | h) << (24 - (y % 4) * 8);
          y++;
        }
      return g.create(u, y);
    },
    _map: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
  };
})();
(function (d) {
  function g(m, t, b, k, a, c, f) {
    m = m + ((t & b) | (~t & k)) + a + f;
    return ((m << c) | (m >>> (32 - c))) + t;
  }

  function e(m, t, b, k, a, c, f) {
    m = m + ((t & k) | (b & ~k)) + a + f;
    return ((m << c) | (m >>> (32 - c))) + t;
  }

  function q(m, t, b, k, a, c, f) {
    m = m + (t ^ b ^ k) + a + f;
    return ((m << c) | (m >>> (32 - c))) + t;
  }

  function x(m, t, b, k, a, c, f) {
    m = m + (b ^ (t | ~k)) + a + f;
    return ((m << c) | (m >>> (32 - c))) + t;
  }
  var u = CryptoJS,
    y = u.lib,
    z = y.WordArray,
    A = y.Hasher;
  y = u.algo;
  for (var h = [], w = 0; 64 > w; w++) h[w] = (4294967296 * d.abs(d.sin(w + 1))) | 0;
  y = y.MD5 = A.extend({
    _doReset: function () {
      this._hash = new z.init([1732584193, 4023233417, 2562383102, 271733878]);
    },
    _doProcessBlock: function (m, t) {
      for (var b = 0; 16 > b; b++) {
        var k = t + b,
          a = m[k];
        m[k] = (((a << 8) | (a >>> 24)) & 16711935) | (((a << 24) | (a >>> 8)) & 4278255360);
      }
      b = this._hash.words;
      k = m[t + 0];
      a = m[t + 1];
      var c = m[t + 2],
        f = m[t + 3],
        v = m[t + 4],
        B = m[t + 5],
        I = m[t + 6],
        G = m[t + 7],
        O = m[t + 8],
        D = m[t + 9],
        F = m[t + 10],
        C = m[t + 11],
        J = m[t + 12],
        H = m[t + 13],
        E = m[t + 14],
        L = m[t + 15],
        l = b[0],
        r = b[1],
        n = b[2],
        p = b[3];
      l = g(l, r, n, p, k, 7, h[0]);
      p = g(p, l, r, n, a, 12, h[1]);
      n = g(n, p, l, r, c, 17, h[2]);
      r = g(r, n, p, l, f, 22, h[3]);
      l = g(l, r, n, p, v, 7, h[4]);
      p = g(p, l, r, n, B, 12, h[5]);
      n = g(n, p, l, r, I, 17, h[6]);
      r = g(r, n, p, l, G, 22, h[7]);
      l = g(l, r, n, p, O, 7, h[8]);
      p = g(p, l, r, n, D, 12, h[9]);
      n = g(n, p, l, r, F, 17, h[10]);
      r = g(r, n, p, l, C, 22, h[11]);
      l = g(l, r, n, p, J, 7, h[12]);
      p = g(p, l, r, n, H, 12, h[13]);
      n = g(n, p, l, r, E, 17, h[14]);
      r = g(r, n, p, l, L, 22, h[15]);
      l = e(l, r, n, p, a, 5, h[16]);
      p = e(p, l, r, n, I, 9, h[17]);
      n = e(n, p, l, r, C, 14, h[18]);
      r = e(r, n, p, l, k, 20, h[19]);
      l = e(l, r, n, p, B, 5, h[20]);
      p = e(p, l, r, n, F, 9, h[21]);
      n = e(n, p, l, r, L, 14, h[22]);
      r = e(r, n, p, l, v, 20, h[23]);
      l = e(l, r, n, p, D, 5, h[24]);
      p = e(p, l, r, n, E, 9, h[25]);
      n = e(n, p, l, r, f, 14, h[26]);
      r = e(r, n, p, l, O, 20, h[27]);
      l = e(l, r, n, p, H, 5, h[28]);
      p = e(p, l, r, n, c, 9, h[29]);
      n = e(n, p, l, r, G, 14, h[30]);
      r = e(r, n, p, l, J, 20, h[31]);
      l = q(l, r, n, p, B, 4, h[32]);
      p = q(p, l, r, n, O, 11, h[33]);
      n = q(n, p, l, r, C, 16, h[34]);
      r = q(r, n, p, l, E, 23, h[35]);
      l = q(l, r, n, p, a, 4, h[36]);
      p = q(p, l, r, n, v, 11, h[37]);
      n = q(n, p, l, r, G, 16, h[38]);
      r = q(r, n, p, l, F, 23, h[39]);
      l = q(l, r, n, p, H, 4, h[40]);
      p = q(p, l, r, n, k, 11, h[41]);
      n = q(n, p, l, r, f, 16, h[42]);
      r = q(r, n, p, l, I, 23, h[43]);
      l = q(l, r, n, p, D, 4, h[44]);
      p = q(p, l, r, n, J, 11, h[45]);
      n = q(n, p, l, r, L, 16, h[46]);
      r = q(r, n, p, l, c, 23, h[47]);
      l = x(l, r, n, p, k, 6, h[48]);
      p = x(p, l, r, n, G, 10, h[49]);
      n = x(n, p, l, r, E, 15, h[50]);
      r = x(r, n, p, l, B, 21, h[51]);
      l = x(l, r, n, p, J, 6, h[52]);
      p = x(p, l, r, n, f, 10, h[53]);
      n = x(n, p, l, r, F, 15, h[54]);
      r = x(r, n, p, l, a, 21, h[55]);
      l = x(l, r, n, p, O, 6, h[56]);
      p = x(p, l, r, n, L, 10, h[57]);
      n = x(n, p, l, r, I, 15, h[58]);
      r = x(r, n, p, l, H, 21, h[59]);
      l = x(l, r, n, p, v, 6, h[60]);
      p = x(p, l, r, n, C, 10, h[61]);
      n = x(n, p, l, r, c, 15, h[62]);
      r = x(r, n, p, l, D, 21, h[63]);
      b[0] = (b[0] + l) | 0;
      b[1] = (b[1] + r) | 0;
      b[2] = (b[2] + n) | 0;
      b[3] = (b[3] + p) | 0;
    },
    _doFinalize: function () {
      var m = this._data,
        t = m.words,
        b = 8 * this._nDataBytes,
        k = 8 * m.sigBytes;
      t[k >>> 5] |= 128 << (24 - (k % 32));
      var a = d.floor(b / 4294967296);
      t[(((k + 64) >>> 9) << 4) + 15] = (((a << 8) | (a >>> 24)) & 16711935) | (((a << 24) | (a >>> 8)) & 4278255360);
      t[(((k + 64) >>> 9) << 4) + 14] = (((b << 8) | (b >>> 24)) & 16711935) | (((b << 24) | (b >>> 8)) & 4278255360);
      m.sigBytes = 4 * (t.length + 1);
      this._process();
      m = this._hash;
      t = m.words;
      for (b = 0; 4 > b; b++)
        (k = t[b]), (t[b] = (((k << 8) | (k >>> 24)) & 16711935) | (((k << 24) | (k >>> 8)) & 4278255360));
      return m;
    },
    clone: function () {
      var m = A.clone.call(this);
      m._hash = this._hash.clone();
      return m;
    },
  });
  u.MD5 = A._createHelper(y);
  u.HmacMD5 = A._createHmacHelper(y);
})(Math);
(function () {
  var d = CryptoJS,
    g = d.lib,
    e = g.Base,
    q = g.WordArray;
  g = d.algo;
  var x = (g.EvpKDF = e.extend({
    cfg: e.extend({
      keySize: 4,
      hasher: g.MD5,
      iterations: 1,
    }),
    init: function (u) {
      this.cfg = this.cfg.extend(u);
    },
    compute: function (u, y) {
      var z = this.cfg,
        A = z.hasher.create(),
        h = q.create(),
        w = h.words,
        m = z.keySize;
      for (z = z.iterations; w.length < m; ) {
        t && A.update(t);
        var t = A.update(u).finalize(y);
        A.reset();
        for (var b = 1; b < z; b++) (t = A.finalize(t)), A.reset();
        h.concat(t);
      }
      h.sigBytes = 4 * m;
      return h;
    },
  }));
  d.EvpKDF = function (u, y, z) {
    return x.create(z).compute(u, y);
  };
})();
CryptoJS.lib.Cipher ||
  (function (d) {
    var g = CryptoJS,
      e = g.lib,
      q = e.Base,
      x = e.WordArray,
      u = e.BufferedBlockAlgorithm,
      y = g.enc.Base64,
      z = g.algo.EvpKDF,
      A = (e.Cipher = u.extend({
        cfg: q.extend(),
        createEncryptor: function (a, c) {
          return this.create(this._ENC_XFORM_MODE, a, c);
        },
        createDecryptor: function (a, c) {
          return this.create(this._DEC_XFORM_MODE, a, c);
        },
        init: function (a, c, f) {
          this.cfg = this.cfg.extend(f);
          this._xformMode = a;
          this._key = c;
          this.reset();
        },
        reset: function () {
          u.reset.call(this);
          this._doReset();
        },
        process: function (a) {
          this._append(a);
          return this._process();
        },
        finalize: function (a) {
          a && this._append(a);
          return this._doFinalize();
        },
        keySize: 4,
        ivSize: 4,
        _ENC_XFORM_MODE: 1,
        _DEC_XFORM_MODE: 2,
        _createHelper: function (a) {
          return {
            encrypt: function (c, f, v) {
              return ("string" == typeof f ? k : b).encrypt(a, c, f, v);
            },
            decrypt: function (c, f, v) {
              return ("string" == typeof f ? k : b).decrypt(a, c, f, v);
            },
          };
        },
      }));
    e.StreamCipher = A.extend({
      _doFinalize: function () {
        return this._process(!0);
      },
      blockSize: 1,
    });
    var h = (g.mode = {}),
      w = function (a, c, f) {
        var v = this._iv;
        v ? (this._iv = d) : (v = this._prevBlock);
        for (var B = 0; B < f; B++) a[c + B] ^= v[B];
      },
      m = (e.BlockCipherMode = q.extend({
        createEncryptor: function (a, c) {
          return this.Encryptor.create(a, c);
        },
        createDecryptor: function (a, c) {
          return this.Decryptor.create(a, c);
        },
        init: function (a, c) {
          this._cipher = a;
          this._iv = c;
        },
      })).extend();
    m.Encryptor = m.extend({
      processBlock: function (a, c) {
        var f = this._cipher,
          v = f.blockSize;
        w.call(this, a, c, v);
        f.encryptBlock(a, c);
        this._prevBlock = a.slice(c, c + v);
      },
    });
    m.Decryptor = m.extend({
      processBlock: function (a, c) {
        var f = this._cipher,
          v = f.blockSize,
          B = a.slice(c, c + v);
        f.decryptBlock(a, c);
        w.call(this, a, c, v);
        this._prevBlock = B;
      },
    });
    h = h.CBC = m;
    m = (g.pad = {}).Pkcs7 = {
      pad: function (a, c) {
        var f = 4 * c;
        f -= a.sigBytes % f;
        for (var v = (f << 24) | (f << 16) | (f << 8) | f, B = [], I = 0; I < f; I += 4) B.push(v);
        f = x.create(B, f);
        a.concat(f);
      },
      unpad: function (a) {
        a.sigBytes -= a.words[(a.sigBytes - 1) >>> 2] & 255;
      },
    };
    e.BlockCipher = A.extend({
      cfg: A.cfg.extend({
        mode: h,
        padding: m,
      }),
      reset: function () {
        A.reset.call(this);
        var a = this.cfg,
          c = a.iv;
        a = a.mode;
        if (this._xformMode == this._ENC_XFORM_MODE) var f = a.createEncryptor;
        else (f = a.createDecryptor), (this._minBufferSize = 1);
        this._mode = f.call(a, this, c && c.words);
      },
      _doProcessBlock: function (a, c) {
        this._mode.processBlock(a, c);
      },
      _doFinalize: function () {
        var a = this.cfg.padding;
        if (this._xformMode == this._ENC_XFORM_MODE) {
          a.pad(this._data, this.blockSize);
          var c = this._process(!0);
        } else (c = this._process(!0)), a.unpad(c);
        return c;
      },
      blockSize: 4,
    });
    var t = (e.CipherParams = q.extend({
      init: function (a) {
        this.mixIn(a);
      },
      toString: function (a) {
        return (a || this.formatter).stringify(this);
      },
    }));
    h = (g.format = {}).OpenSSL = {
      stringify: function (a) {
        var c = a.ciphertext;
        a = a.salt;
        return (a ? x.create([1398893684, 1701076831]).concat(a).concat(c) : c).toString(y);
      },
      parse: function (a) {
        a = y.parse(a);
        var c = a.words;
        if (1398893684 == c[0] && 1701076831 == c[1]) {
          var f = x.create(c.slice(2, 4));
          c.splice(0, 4);
          a.sigBytes -= 16;
        }
        return t.create({
          ciphertext: a,
          salt: f,
        });
      },
    };
    var b = (e.SerializableCipher = q.extend({
      cfg: q.extend({
        format: h,
      }),
      encrypt: function (a, c, f, v) {
        v = this.cfg.extend(v);
        var B = a.createEncryptor(f, v);
        c = B.finalize(c);
        B = B.cfg;
        return t.create({
          ciphertext: c,
          key: f,
          iv: B.iv,
          algorithm: a,
          mode: B.mode,
          padding: B.padding,
          blockSize: a.blockSize,
          formatter: v.format,
        });
      },
      decrypt: function (a, c, f, v) {
        v = this.cfg.extend(v);
        c = this._parse(c, v.format);
        return a.createDecryptor(f, v).finalize(c.ciphertext);
      },
      _parse: function (a, c) {
        return "string" == typeof a ? c.parse(a, this) : a;
      },
    }));
    g = (g.kdf = {}).OpenSSL = {
      execute: function (a, c, f, v) {
        v || (v = x.random(8));
        a = z
          .create({
            keySize: c + f,
          })
          .compute(a, v);
        f = x.create(a.words.slice(c), 4 * f);
        a.sigBytes = 4 * c;
        return t.create({
          key: a,
          iv: f,
          salt: v,
        });
      },
    };
    var k = (e.PasswordBasedCipher = b.extend({
      cfg: b.cfg.extend({
        kdf: g,
      }),
      encrypt: function (a, c, f, v) {
        v = this.cfg.extend(v);
        f = v.kdf.execute(f, a.keySize, a.ivSize);
        v.iv = f.iv;
        a = b.encrypt.call(this, a, c, f.key, v);
        a.mixIn(f);
        return a;
      },
      decrypt: function (a, c, f, v) {
        v = this.cfg.extend(v);
        c = this._parse(c, v.format);
        f = v.kdf.execute(f, a.keySize, a.ivSize, c.salt);
        v.iv = f.iv;
        return b.decrypt.call(this, a, c, f.key, v);
      },
    }));
  })();
(function () {
  var d = CryptoJS,
    g = d.enc.Utf8;
  d.algo.HMAC = d.lib.Base.extend({
    init: function (e, q) {
      e = this._hasher = new e.init();
      "string" == typeof q && (q = g.parse(q));
      var x = e.blockSize,
        u = 4 * x;
      q.sigBytes > u && (q = e.finalize(q));
      q.clamp();
      for (var y = (this._oKey = q.clone()), z = (this._iKey = q.clone()), A = y.words, h = z.words, w = 0; w < x; w++)
        (A[w] ^= 1549556828), (h[w] ^= 909522486);
      y.sigBytes = z.sigBytes = u;
      this.reset();
    },
    reset: function () {
      var e = this._hasher;
      e.reset();
      e.update(this._iKey);
    },
    update: function (e) {
      this._hasher.update(e);
      return this;
    },
    finalize: function (e) {
      var q = this._hasher;
      e = q.finalize(e);
      q.reset();
      return q.finalize(this._oKey.clone().concat(e));
    },
  });
})();
(function () {
  for (
    var d = CryptoJS,
      g = d.lib.BlockCipher,
      e = d.algo,
      q = [],
      x = [],
      u = [],
      y = [],
      z = [],
      A = [],
      h = [],
      w = [],
      m = [],
      t = [],
      b = [],
      k = 0;
    256 > k;
    k++
  )
    b[k] = 128 > k ? k << 1 : (k << 1) ^ 283;
  var a = 0,
    c = 0;
  for (k = 0; 256 > k; k++) {
    var f = c ^ (c << 1) ^ (c << 2) ^ (c << 3) ^ (c << 4);
    f = (f >>> 8) ^ (f & 255) ^ 99;
    q[a] = f;
    x[f] = a;
    var v = b[a],
      B = b[v],
      I = b[B],
      G = (257 * b[f]) ^ (16843008 * f);
    u[a] = (G << 24) | (G >>> 8);
    y[a] = (G << 16) | (G >>> 16);
    z[a] = (G << 8) | (G >>> 24);
    A[a] = G;
    G = (16843009 * I) ^ (65537 * B) ^ (257 * v) ^ (16843008 * a);
    h[f] = (G << 24) | (G >>> 8);
    w[f] = (G << 16) | (G >>> 16);
    m[f] = (G << 8) | (G >>> 24);
    t[f] = G;
    a ? ((a = v ^ b[b[b[I ^ v]]]), (c ^= b[b[c]])) : (a = c = 1);
  }
  var O = [0, 1, 2, 4, 8, 16, 32, 64, 128, 27, 54];
  e = e.AES = g.extend({
    _doReset: function () {
      var D = this._key,
        F = D.words,
        C = D.sigBytes / 4;
      D = 4 * ((this._nRounds = C + 6) + 1);
      for (var J = (this._keySchedule = []), H = 0; H < D; H++)
        if (H < C) J[H] = F[H];
        else {
          var E = J[H - 1];
          H % C
            ? 6 < C &&
              4 == H % C &&
              (E = (q[E >>> 24] << 24) | (q[(E >>> 16) & 255] << 16) | (q[(E >>> 8) & 255] << 8) | q[E & 255])
            : ((E = (E << 8) | (E >>> 24)),
              (E = (q[E >>> 24] << 24) | (q[(E >>> 16) & 255] << 16) | (q[(E >>> 8) & 255] << 8) | q[E & 255]),
              (E ^= O[(H / C) | 0] << 24));
          J[H] = J[H - C] ^ E;
        }
      F = this._invKeySchedule = [];
      for (C = 0; C < D; C++)
        (H = D - C),
          (E = C % 4 ? J[H] : J[H - 4]),
          (F[C] =
            4 > C || 4 >= H ? E : h[q[E >>> 24]] ^ w[q[(E >>> 16) & 255]] ^ m[q[(E >>> 8) & 255]] ^ t[q[E & 255]]);
    },
    encryptBlock: function (D, F) {
      this._doCryptBlock(D, F, this._keySchedule, u, y, z, A, q);
    },
    decryptBlock: function (D, F) {
      var C = D[F + 1];
      D[F + 1] = D[F + 3];
      D[F + 3] = C;
      this._doCryptBlock(D, F, this._invKeySchedule, h, w, m, t, x);
      C = D[F + 1];
      D[F + 1] = D[F + 3];
      D[F + 3] = C;
    },
    _doCryptBlock: function (D, F, C, J, H, E, L, l) {
      for (
        var r = this._nRounds,
          n = D[F] ^ C[0],
          p = D[F + 1] ^ C[1],
          M = D[F + 2] ^ C[2],
          K = D[F + 3] ^ C[3],
          N = 4,
          S = 1;
        S < r;
        S++
      ) {
        var P = J[n >>> 24] ^ H[(p >>> 16) & 255] ^ E[(M >>> 8) & 255] ^ L[K & 255] ^ C[N++],
          Q = J[p >>> 24] ^ H[(M >>> 16) & 255] ^ E[(K >>> 8) & 255] ^ L[n & 255] ^ C[N++],
          R = J[M >>> 24] ^ H[(K >>> 16) & 255] ^ E[(n >>> 8) & 255] ^ L[p & 255] ^ C[N++];
        K = J[K >>> 24] ^ H[(n >>> 16) & 255] ^ E[(p >>> 8) & 255] ^ L[M & 255] ^ C[N++];
        n = P;
        p = Q;
        M = R;
      }
      P = ((l[n >>> 24] << 24) | (l[(p >>> 16) & 255] << 16) | (l[(M >>> 8) & 255] << 8) | l[K & 255]) ^ C[N++];
      Q = ((l[p >>> 24] << 24) | (l[(M >>> 16) & 255] << 16) | (l[(K >>> 8) & 255] << 8) | l[n & 255]) ^ C[N++];
      R = ((l[M >>> 24] << 24) | (l[(K >>> 16) & 255] << 16) | (l[(n >>> 8) & 255] << 8) | l[p & 255]) ^ C[N++];
      K = ((l[K >>> 24] << 24) | (l[(n >>> 16) & 255] << 16) | (l[(p >>> 8) & 255] << 8) | l[M & 255]) ^ C[N++];
      D[F] = P;
      D[F + 1] = Q;
      D[F + 2] = R;
      D[F + 3] = K;
    },
    keySize: 8,
  });
  d.AES = g._createHelper(e);
})();
(function (d) {
  var g = CryptoJS,
    e = g.lib,
    q = e.WordArray,
    x = e.Hasher;
  e = g.algo;
  var u = [],
    y = [];
  (function () {
    function A(t) {
      for (var b = d.sqrt(t), k = 2; k <= b; k++) if (!(t % k)) return !1;
      return !0;
    }

    function h(t) {
      return (4294967296 * (t - (t | 0))) | 0;
    }
    for (var w = 2, m = 0; 64 > m; )
      A(w) && (8 > m && (u[m] = h(d.pow(w, 0.5))), (y[m] = h(d.pow(w, 1 / 3))), m++), w++;
  })();
  var z = [];
  e = e.SHA256 = x.extend({
    _doReset: function () {
      this._hash = new q.init(u.slice(0));
    },
    _doProcessBlock: function (A, h) {
      for (
        var w = this._hash.words, m = w[0], t = w[1], b = w[2], k = w[3], a = w[4], c = w[5], f = w[6], v = w[7], B = 0;
        64 > B;
        B++
      ) {
        if (16 > B) z[B] = A[h + B] | 0;
        else {
          var I = z[B - 15],
            G = z[B - 2];
          z[B] =
            (((I << 25) | (I >>> 7)) ^ ((I << 14) | (I >>> 18)) ^ (I >>> 3)) +
            z[B - 7] +
            (((G << 15) | (G >>> 17)) ^ ((G << 13) | (G >>> 19)) ^ (G >>> 10)) +
            z[B - 16];
        }
        I =
          v +
          (((a << 26) | (a >>> 6)) ^ ((a << 21) | (a >>> 11)) ^ ((a << 7) | (a >>> 25))) +
          ((a & c) ^ (~a & f)) +
          y[B] +
          z[B];
        G =
          (((m << 30) | (m >>> 2)) ^ ((m << 19) | (m >>> 13)) ^ ((m << 10) | (m >>> 22))) +
          ((m & t) ^ (m & b) ^ (t & b));
        v = f;
        f = c;
        c = a;
        a = (k + I) | 0;
        k = b;
        b = t;
        t = m;
        m = (I + G) | 0;
      }
      w[0] = (w[0] + m) | 0;
      w[1] = (w[1] + t) | 0;
      w[2] = (w[2] + b) | 0;
      w[3] = (w[3] + k) | 0;
      w[4] = (w[4] + a) | 0;
      w[5] = (w[5] + c) | 0;
      w[6] = (w[6] + f) | 0;
      w[7] = (w[7] + v) | 0;
    },
    _doFinalize: function () {
      var A = this._data,
        h = A.words,
        w = 8 * this._nDataBytes,
        m = 8 * A.sigBytes;
      h[m >>> 5] |= 128 << (24 - (m % 32));
      h[(((m + 64) >>> 9) << 4) + 14] = d.floor(w / 4294967296);
      h[(((m + 64) >>> 9) << 4) + 15] = w;
      A.sigBytes = 4 * h.length;
      this._process();
      return this._hash;
    },
    clone: function () {
      var A = x.clone.call(this);
      A._hash = this._hash.clone();
      return A;
    },
  });
  g.SHA256 = x._createHelper(e);
  g.HmacSHA256 = x._createHmacHelper(e);
})(Math);
var _swiper;

function encryptedAES(d) {
  var g = CryptoJS.enc.Base64.parse("7C3253DCF7320050GH677D159AB03DBB"),
    e = CryptoJS.enc.Base64.parse("7C3253DCF7320050GH677D159AB03DBB");
  return CryptoJS.AES.encrypt(d, g, {
    iv: e,
  });
}

function setDefaultParams() {
  var d = JSON.parse(localStorage.getItem("defaultConfig"));
  //	document.getElementById("graphic").value = d.graphicOption;
  //	document.getElementById("slice").value = d.totalSlices;
  //        document.getElementById("slice").value = 12;
  "#337ab7" !== d.backgroundColor &&
    ($("body").css("background-color", d.backgroundColor), $("body").css("background-image", "none"));
  //    setSliceDetail();
  updateMemTotalSlices();
  $("#wallpaper-config").change();
}

function updateMemTotalSlices() {
  if (12 === parseInt(_globalVars.config.totalSlices))
    for (var d = 0; d < _globalVars.jsonData.length; d++)
      _globalVars.jsonData[d].imageUrl = _globalVars.jsonData[d].imageUrl;
  d = {
    config: _globalVars.config,
    jsonData: _globalVars.jsonData,
    anims: {
      fallingSnow: !1,
    },
  };
  d.config.wheelUX = $("#wheel-ux-config").val();
  "1" === $("#wallpaper-config").val() && (d.anims.fallingSnow = !0);
  "1" === $("#coundown-popup-config").val() &&
    (d.countdownConfig = {
      remainTime: parseInt($(".remain-time").val()),
      timesToShowCountDown: parseInt($(".limit-play-times").val()),
    });
  "1" === $("#email-popup-config").val() &&
    (d.configEmail = {
      emailSendAddress: encryptedAES($("#email-send").val().trim()).toString(),
      passwordEmailSendAddress: encryptedAES($("#password-email-send").val()).toString(),
      emailReceiveAddress: encryptedAES($("#email-receive").val()).toString(),
    });
  $("#config")
    .empty()
    .text("var _dynamicParams = " + JSON.stringify(d));
}

function reload() {
  localStorage.setItem("defaultConfig", JSON.stringify(_globalVars.config));
  updateMemTotalSlices();
  document.getElementById("viewBox").remove();
  drawLuckWheel();
  try {
    loadEvents();
  } catch (d) {}
}

function setGraphicQuality() {
  //	var d = document.getElementById("graphic").value;
  //        var d = document.getElementById("graphic").value;
  _globalVars.config.graphicOption = 1;
  reload();
}

function setTotalSlices() {
  debugger;
  //	var d = document.getElementById("slice").value;
  //        var d = document.getElementById("slice").value;
  _globalVars.config.totalSlices = 12;
  d = JSON.parse(localStorage.getItem("sliceData"));
  var g = Math.abs(d.length - parseInt(_globalVars.config.totalSlices));
  if (d.length > parseInt(_globalVars.config.totalSlices)) for (var e = 0; e < g; e++) d.splice(d[d.length - 1], 1);
  else if (d.length < parseInt(_globalVars.config.totalSlices)) {
    e = d.length;
    for (var q = 0; q < g; q++)
      d.push({
        value: e + q + 1 + "$",
      });
  }
  if (12 === parseInt(_globalVars.config.totalSlices))
    for (g = 0; g < _globalVars.jsonData.length; g++) d[g].imageUrl = "img/reward" + g + ".png";
  _globalVars.jsonData = d;
  localStorage.setItem("sliceData", JSON.stringify(d));
  setSliceDetail();
  reload();
}

function setSliceDetail() {
  var d = JSON.parse(localStorage.getItem("sliceData"));
  //	document.getElementById("list-input").innerHTML = "";
  //	document.getElementById("list-redirect-Link").innerHTML = "";
  for (var g = 0; g < d.length; g++) {
    var e = document.createElement("input");
    e.setAttribute("id", g);
    e.setAttribute("type", "text");
    e.setAttribute("maxlength", "15");
    e.setAttribute("placeholder", "Enter Slice Value");
    e.setAttribute("class", "form-control input-detail");
    e.setAttribute("oninput", "updateSliceData(this)");
    e.setAttribute("value", d[g].value);
    //		document.getElementById("list-input").appendChild(e);
    e = document.createElement("input");
    e.setAttribute("id", g);
    e.setAttribute("type", "text");
    e.setAttribute("placeholder", "Enter Redirect Link: https:...");
    e.setAttribute("class", "form-control input-detail");
    e.setAttribute("oninput", "updateSliceData(this)");
    "undefined" !== typeof d[g].link && e.setAttribute("value", d[g].link);
    //		document.getElementById("list-redirect-Link").appendChild(e)
  }
}

function updateSliceData(d) {
  console.log(d.value);
  var g = $(d).parent().attr("id");
  if (-1 < g.indexOf("list-redirect-Link")) {
    for (g = 0; g < _globalVars.jsonData.length; g++) parseInt(d.id) === g && (_globalVars.jsonData[g].link = d.value);
    $("#reward-popup-config").val(1);
    $("#reward-popup-config").change();
  } else if (-1 < g.indexOf("list-input"))
    for (g = 0; g < _globalVars.jsonData.length; g++) parseInt(d.id) === g && (_globalVars.jsonData[g].value = d.value);
  localStorage.setItem("sliceData", JSON.stringify(_globalVars.jsonData));
  reload();
}

function setBrandLogo(d) {
  d = document.querySelector("#file-selector").files[0];
  var g = new FileReader();
  g.onloadend = function () {
    _globalVars.config.brandLogo = g.result;
    reload();
  };
  d && g.readAsDataURL(d);
}

function reset() {
  localStorage.clear();
  location.reload();
}
var assets = {
    css: "",
    fonts: "",
    img: "",
    js: "",
    media: "",
  },
  _zip;

function createAssets(d, g, e, q) {
  var x = d + g;
  -1 === x.indexOf("undefined") &&
    fetch(x)
      .then(function (u) {
        return 200 === u.status || 0 === u.status ? Promise.resolve(u.blob()) : Promise.reject(Error(u.statusText));
      })
      .then(
        function (u) {
          console.log(u);
          "binary" === e &&
            -1 < d.indexOf("js") &&
            assets.js.file(g, u, {
              binary: !0,
            });
          "binary" === e &&
            -1 < d.indexOf("css") &&
            assets.css.file(g, u, {
              binary: !0,
            });
          "image" === e &&
            -1 < d.indexOf("img") &&
            assets.img.file(g, u, {
              base64: !0,
            });
          "audio" === e &&
            -1 < d.indexOf("media") &&
            assets.media.file(g, u, {
              base64: !0,
            });
          q(!0);
        },
        function (u) {
          q(u.toString());
        }
      );
}

function quickStar() {
  $(".context").removeClass("hide");
}
$(".layout-group .toogle-hidden-menu").bind("click", function (d) {
  d.preventDefault();
  $(".toggle-redirect-link").toggleClass("show");
  $("#list-redirect-Link").toggleClass("show");
});
$("#wheel-ux-config").on("change", function (d) {
  _globalVars.config.wheelUX = $(this).val();
  reload();
});
$("#sound-config").on("change", function (d) {
  1 === parseInt($(this).val())
    ? ($("#spinSound").removeAttr("data-type"), (_globalVars.config.allowSound = !0))
    : ($("#spinSound").attr("data-type", "admin"), (_globalVars.config.allowSound = !1));
});
$(".btn-save-countdown-timer").bind("click", function (d) {
  d.preventDefault();
  $(".menu-config").addClass("hide");
});
$("#coundown-popup-config").on("change", function (d) {
  1 === parseInt($(this).val())
    ? ($("#count-down-timer").removeAttr("data-type"), $(".menu-config").removeClass("hide"))
    : ($("#count-down-timer").attr("data-type", "admin"), $(".menu-config").addClass("hide"));
});
$("#reward-popup-config").on("change", function (d) {
  1 === parseInt($(this).val())
    ? $("#daily-lucky").removeAttr("data-type")
    : $("#daily-lucky").attr("data-type", "admin");
});
$("#login-popup-config").on("change", function (d) {
  1 === parseInt($(this).val())
    ? ($("#access-key").removeAttr("data-type"),
      $("#access-key").removeClass("hide"),
      $("#access-key .inner-content").removeClass("active"),
      setTimeout(function () {
        $("#access-key .inner-content").addClass("active");
        setTimeout(function () {
          $("#access-key").addClass("hide");
          $("#access-key .inner-content").removeClass("active");
        }, 1500);
      }, 500))
    : $("#access-key").attr("data-type", "admin");
});
$("#email-popup-config").on("change", function (d) {
  1 === parseInt($(this).val())
    ? ($("#popup-customer-email").removeAttr("data-type"),
      $("#smtp").removeAttr("data-type"),
      $("#popup-config-customer-email").removeClass("hide"),
      $("#popup-config-customer-email .inner-content").addClass("active"))
    : ($("#popup-customer-email").attr("data-type", "admin"), $("#smtp").attr("data-type", "admin"));
});

function offAllAnims() {
  animations.flame.off();
  animations.christmas.off();
  $("#particles-js").removeAttr("class");
}
$("#wallpaper-config").on("change", function (d) {
  d = JSON.parse(localStorage.getItem("defaultConfig"));
  d.anims = {
    fallingSnow: !1,
    flame: !1,
  };
  $("#particles-lib").attr("data-type", "admin");
  $("#anims").attr("data-type", "admin");
  $("#particles-js").attr("data-type", "admin").hide();
  $("body").removeClass("custom-bg");
  offAllAnims();
  1 === parseInt($(this).val()) &&
    (animations.christmas.on(),
    (d.anims.fallingSnow = !0),
    $("#particles-lib").removeAttr("data-type"),
    $("#anims").removeAttr("data-type"),
    $("#particles-js").removeAttr("data-type").show());
  2 === parseInt($(this).val()) &&
    ($("#particles-lib").removeAttr("data-type"),
    $("#anims").removeAttr("data-type"),
    $("#particles-js").removeAttr("data-type").show(),
    $("#particles-js").addClass("happy-new-year"));
  3 === parseInt($(this).val()) &&
    ($("#particles-lib").removeAttr("data-type"),
    $("#anims").removeAttr("data-type"),
    $("#particles-js").removeAttr("data-type").show(),
    $("#particles-js").addClass("happy-new-year songkran"));
  4 === parseInt($(this).val()) &&
    (animations.flame.on(),
    (d.anims.flame = !0),
    $("#particles-lib").removeAttr("data-type"),
    $("#anims").removeAttr("data-type"),
    $("#particles-js").removeAttr("data-type").show(),
    $("#particles-js").addClass("flame"));
  5 === parseInt($(this).val()) &&
    ($("#particles-lib").removeAttr("data-type"),
    $("#anims").removeAttr("data-type"),
    $("#particles-js").removeAttr("data-type").show(),
    $("#particles-js").addClass("gift-bg"));
  6 === parseInt($(this).val()) &&
    ($("#particles-lib").removeAttr("data-type"),
    $("#anims").removeAttr("data-type"),
    $("#particles-js").removeAttr("data-type").show(),
    $("#particles-js").addClass("zodiac-bg"));
  9 === parseInt($(this).val()) && $("body").addClass("custom-bg");
  localStorage.setItem("defaultConfig", JSON.stringify(d));
});
$("#popup-config-customer-email .btn-save-email-config").bind("click", function (d) {
  d.preventDefault();
  $("#popup-config-customer-email").addClass("hide");
});
$("#colorpicker").spectrum({
  flat: !0,
  showInput: !0,
  preferredFormat: "hex",
  change: function () {
    var d = $("#colorpicker").spectrum("get").toHexString();
    $("body").css("background-color", d);
    $("body").css("background-image", "none");
    var g = JSON.parse(localStorage.getItem("defaultConfig"));
    g.backgroundColor = d;
    localStorage.setItem("defaultConfig", JSON.stringify(g));
  },
});
$(".context").on("click", function () {
  $(event.target).hasClass("swiper-container") ||
    0 !== $(event.target).parents(".swiper-container").length ||
    $(".context").addClass("hide");
});
$(".btn-switch").on("click", function () {
  $("body").hasClass("ad-mode")
    ? ($(".btn-switch span").text("Switch Banner Mode"),
      $("body").removeClass("ad-mode"),
      $("#swiper-style").attr("data-type", "admin"),
      $("#swiper-js").attr("data-type", "admin"),
      $("#ad-script").attr("data-type", "admin"),
      $("#ads").attr("data-type", "admin"))
    : ($(".btn-switch span").text("Switch To Normal"),
      $("body").addClass("ad-mode"),
      $("#swiper-style").removeAttr("data-type"),
      $("#swiper-js").removeAttr("data-type"),
      $("#ad-script").removeAttr("data-type"),
      $("#ads").removeAttr("data-type"),
      (_swiper = new Swiper(".swiper-container", {
        effect: "cube",
        grabCursor: !0,
        cubeEffect: {
          shadow: !0,
          slideShadows: !0,
          shadowOffset: 20,
          shadowScale: 0.94,
        },
        speed: 1e3,
        loop: !0,
        autoplay: {
          delay: 5e3,
        },
      })));
});

function drawnAd() {
  if (_swiper) {
    _swiper.destroy();
    var d = JSON.parse(localStorage.getItem("ads"));
    $(".swiper-container").removeAttr("class").addClass("swiper-container");
    $(".swiper-container .swiper-wrapper").removeAttr("style").empty();
    for (var g = 0; g < d.length; g++) {
      var e = "url(" + d[g] + ")";
      $(".swiper-container .swiper-wrapper").append('<div class="swiper-slide"></div>');
      $(".swiper-container .swiper-slide").eq(g).css({
        "background-image": e,
      });
    }
    _swiper = new Swiper(".swiper-container", {
      effect: "cube",
      grabCursor: !0,
      cubeEffect: {
        shadow: !0,
        slideShadows: !0,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      speed: 1e3,
      loop: !0,
      autoplay: {
        delay: 5e3,
      },
    });
  }
}

function saveAdlink() {
  for (var d = [], g = $(".ad-link").length, e, q = 0; q < g; q++)
    (e = $($(".ad-link").eq(q)).find(".value").val()), d.push(e);
  localStorage.setItem("ads", JSON.stringify(d));
  drawnAd();
  adEvents();
}

function adEvents() {
  $("#ads-edit .btn-ad-delete").unbind("click");
  $("#ads-edit .btn-ad-delete").bind("click", function () {
    $(this).parents(".ad-link").remove();
    saveAdlink();
  });
  $("#ads-edit .btn-ad-addmore").unbind("click");
  $("#ads-edit .btn-ad-addmore").bind("click", function () {
    var d = $(".ad-link").first().clone();
    $("#ads-edit .btn-ad-addmore").before(d);
    saveAdlink();
  });
  $("#ads-edit .ad-link .value").unbind("change");
  $("#ads-edit .ad-link .value").bind("change", function () {
    saveAdlink();
  });
  $("#ads-edit .edit-ico").unbind("click");
  $("#ads-edit .edit-ico").bind("click", function () {
    $(".ad-list").toggleClass("hide");
  });
}
if (localStorage.getItem("ads")) {
  var cloneAd = $(".ad-link").first().clone(),
    adLinks = JSON.parse(localStorage.getItem("ads"));
  $(".ad-link").remove();
  for (var i = 0; i < adLinks.length; i++) {
    cloneAd.find(".value").val(adLinks[i]);
    var adElm = cloneAd.clone();
    $("#ads-edit .btn-ad-addmore").before(adElm);
  }
} else saveAdlink();
adEvents();
//var callback = function () {
//    console.log('callback_param_tag')
//	setTimeout(function() {
//		localStorage.setItem("defaultConfig", JSON.stringify(_globalVars.config));
//		localStorage.setItem("sliceData", JSON.stringify(_globalVars.jsonData));
//		setDefaultParams()
//	}, 800)
//
////    $.ajax({
////        type: 'POST',
////        url: contextPath + cVersion + '/LuckyWheel/InquiryReward',
////        data: {"data": "test"},
////        dataType: 'json',
////        cache: false,
////        beforeSend: function () {
////            console.log('api req')
////            localStorage.setItem("defaultConfig", JSON.stringify(_globalVars.config));
////            localStorage.setItem("sliceData", JSON.stringify(_globalVars.jsonData));
////            setDefaultParams()
////            blockui();
////        },
////        success: function (data) {
////            ;
////            if (isSuccess(data)) {
////                unblockui();
////            } else {
////                unblockui();
////            }
////        },
////        error: function (data) {
////            unblockui();
////            ;
////        }
////
////    });
//};
//"complete" === document.readyState || "loading" !== document.readyState && !document.documentElement.doScroll ? callback() : document.addEventListener("DOMContentLoaded", callback);
