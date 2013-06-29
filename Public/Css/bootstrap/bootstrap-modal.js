/* =========================================================
3	 * bootstrap-modal.js v2.3.2
4	 * http://twitter.github.com/bootstrap/javascript.html#modals
5	 * =========================================================
6	 * Copyright 2012 Twitter, Inc.
7	 *
8	 * Licensed under the Apache License, Version 2.0 (the "License");
9	 * you may not use this file except in compliance with the License.
10	 * You may obtain a copy of the License at
11	 *
12	 * http://www.apache.org/licenses/LICENSE-2.0
13	 *
14	 * Unless required by applicable law or agreed to in writing, software
15	 * distributed under the License is distributed on an "AS IS" BASIS,
16	 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
17	 * See the License for the specific language governing permissions and
18	 * limitations under the License.
19	 * ========================================================= */
20	
21	
22	!function ($) {
23	
24	  "use strict"; // jshint ;_;
25	
26	
27	 /* MODAL CLASS DEFINITION
28	  * ====================== */
29	
30	  var Modal = function (element, options) {
31	    this.options = options
32	    this.$element = $(element)
33	      .delegate('[data-dismiss="modal"]', 'click.dismiss.modal', $.proxy(this.hide, this))
34	    this.options.remote && this.$element.find('.modal-body').load(this.options.remote)
35	  }
36	
37	  Modal.prototype = {
38	
39	      constructor: Modal
40	
41	    , toggle: function () {
42	        return this[!this.isShown ? 'show' : 'hide']()
43	      }
44	
45	    , show: function () {
46	        var that = this
47	          , e = $.Event('show')
48	
49	        this.$element.trigger(e)
50	
51	        if (this.isShown || e.isDefaultPrevented()) return
52	
53	        this.isShown = true
54	
55	        this.escape()
56	
57	        this.backdrop(function () {
58	          var transition = $.support.transition && that.$element.hasClass('fade')
59	
60	          if (!that.$element.parent().length) {
61	            that.$element.appendTo(document.body) //don't move modals dom position
62	          }
63	
64	          that.$element.show()
65	
66	          if (transition) {
67	            that.$element[0].offsetWidth // force reflow
68	          }
69	
70	          that.$element
71	            .addClass('in')
72	            .attr('aria-hidden', false)
73	
74	          that.enforceFocus()
75	
76	          transition ?
77	            that.$element.one($.support.transition.end, function () { that.$element.focus().trigger('shown') }) :
78	            that.$element.focus().trigger('shown')
79	
80	        })
81	      }
82	
83	    , hide: function (e) {
84	        e && e.preventDefault()
85	
86	        var that = this
87	
88	        e = $.Event('hide')
89	
90	        this.$element.trigger(e)
91	
92	        if (!this.isShown || e.isDefaultPrevented()) return
93	
94	        this.isShown = false
95	
96	        this.escape()
97	
98	        $(document).off('focusin.modal')
99	
100	        this.$element
101	          .removeClass('in')
102	          .attr('aria-hidden', true)
103	
104	        $.support.transition && this.$element.hasClass('fade') ?
105	          this.hideWithTransition() :
106	          this.hideModal()
107	      }
108	
109	    , enforceFocus: function () {
110	        var that = this
111	        $(document).on('focusin.modal', function (e) {
112	          if (that.$element[0] !== e.target && !that.$element.has(e.target).length) {
113	            that.$element.focus()
114	          }
115	        })
116	      }
117	
118	    , escape: function () {
119	        var that = this
120	        if (this.isShown && this.options.keyboard) {
121	          this.$element.on('keyup.dismiss.modal', function ( e ) {
122	            e.which == 27 && that.hide()
123	          })
124	        } else if (!this.isShown) {
125	          this.$element.off('keyup.dismiss.modal')
126	        }
127	      }
128	
129	    , hideWithTransition: function () {
130	        var that = this
131	          , timeout = setTimeout(function () {
132	              that.$element.off($.support.transition.end)
133	              that.hideModal()
134	            }, 500)
135	
136	        this.$element.one($.support.transition.end, function () {
137	          clearTimeout(timeout)
138	          that.hideModal()
139	        })
140	      }
141	
142	    , hideModal: function () {
143	        var that = this
144	        this.$element.hide()
145	        this.backdrop(function () {
146	          that.removeBackdrop()
147	          that.$element.trigger('hidden')
148	        })
149	      }
150	
151	    , removeBackdrop: function () {
152	        this.$backdrop && this.$backdrop.remove()
153	        this.$backdrop = null
154	      }
155	
156	    , backdrop: function (callback) {
157	        var that = this
158	          , animate = this.$element.hasClass('fade') ? 'fade' : ''
159	
160	        if (this.isShown && this.options.backdrop) {
161	          var doAnimate = $.support.transition && animate
162	
163	          this.$backdrop = $('<div class="modal-backdrop ' + animate + '" />')
164	            .appendTo(document.body)
165	
166	          this.$backdrop.click(
167	            this.options.backdrop == 'static' ?
168	              $.proxy(this.$element[0].focus, this.$element[0])
169	            : $.proxy(this.hide, this)
170	          )
171	
172	          if (doAnimate) this.$backdrop[0].offsetWidth // force reflow
173	
174	          this.$backdrop.addClass('in')
175	
176	          if (!callback) return
177	
178	          doAnimate ?
179	            this.$backdrop.one($.support.transition.end, callback) :
180	            callback()
181	
182	        } else if (!this.isShown && this.$backdrop) {
183	          this.$backdrop.removeClass('in')
184	
185	          $.support.transition && this.$element.hasClass('fade')?
186	            this.$backdrop.one($.support.transition.end, callback) :
187	            callback()
188	
189	        } else if (callback) {
190	          callback()
191	        }
192	      }
193	  }
194	
195	
196	 /* MODAL PLUGIN DEFINITION
197	  * ======================= */
198	
199	  var old = $.fn.modal
200	
201	  $.fn.modal = function (option) {
202	    return this.each(function () {
203	      var $this = $(this)
204	        , data = $this.data('modal')
205	        , options = $.extend({}, $.fn.modal.defaults, $this.data(), typeof option == 'object' && option)
206	      if (!data) $this.data('modal', (data = new Modal(this, options)))
207	      if (typeof option == 'string') data[option]()
208	      else if (options.show) data.show()
209	    })
210	  }
211	
212	  $.fn.modal.defaults = {
213	      backdrop: true
214	    , keyboard: true
215	    , show: true
216	  }
217	
218	  $.fn.modal.Constructor = Modal
219	
220	
221	 /* MODAL NO CONFLICT
222	  * ================= */
223	
224	  $.fn.modal.noConflict = function () {
225	    $.fn.modal = old
226	    return this
227	  }
228	
229	
230	 /* MODAL DATA-API
231	  * ============== */
232	
233	  $(document).on('click.modal.data-api', '[data-toggle="modal"]', function (e) {
234	    var $this = $(this)
235	      , href = $this.attr('href')
236	      , $target = $($this.attr('data-target') || (href && href.replace(/.*(?=#[^\s]+$)/, ''))) //strip for ie7
237	      , option = $target.data('modal') ? 'toggle' : $.extend({ remote:!/#/.test(href) && href }, $target.data(), $this.data())
238	
239	    e.preventDefault()
240	
241	    $target
242	      .modal(option)
243	      .one('hide', function () {
244	        $this.focus()
245	      })
246	  })
247	
248	}(window.jQuery);