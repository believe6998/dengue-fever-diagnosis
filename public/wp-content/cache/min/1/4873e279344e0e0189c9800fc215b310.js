!function($){"use strict";var Tabs,old,clickHandler,changeHandler;function Plugin(action,options){var args;return args=Array.prototype.slice.call(arguments,1),this.each(function(){var $this,data;(data=($this=$(this)).data("vc.tabs"))||(data=new Tabs($this,$.extend(!0,{},options)),$this.data("vc.tabs",data)),"string"==typeof action&&data[action].apply(data,args)})}(Tabs=function(element,options){this.$element=$(element),this.activeClass="vc_active",this.tabSelector="[data-vc-tab]",this.useCacheFlag=void 0,this.$target=void 0,this.selector=void 0,this.$targetTab=void 0,this.$relatedAccordion=void 0,this.$container=void 0}).prototype.isCacheUsed=function(){var useCache,that;return useCache=function(){return!1!==that.$element.data("vcUseCache")},void 0===(that=this).useCacheFlag&&(this.useCacheFlag=useCache()),this.useCacheFlag},Tabs.prototype.getContainer=function(){return this.isCacheUsed()?(void 0===this.$container&&(this.$container=this.findContainer()),this.$container):this.findContainer()},Tabs.prototype.findContainer=function(){var $container;return($container=this.$element.closest(this.$element.data("vcContainer"))).length||($container=$("body")),$container},Tabs.prototype.getContainerAccordion=function(){return this.getContainer().find("[data-vc-accordion]")},Tabs.prototype.getSelector=function(){var findSelector,$this;return $this=this.$element,findSelector=function(){var selector;return(selector=$this.data("vcTarget"))||(selector=$this.attr("href")),selector},this.isCacheUsed()?(void 0===this.selector&&(this.selector=findSelector()),this.selector):findSelector()},Tabs.prototype.getTarget=function(){var selector;return selector=this.getSelector(),this.isCacheUsed()?(void 0===this.$target&&(this.$target=this.getContainer().find(selector)),this.$target):this.getContainer().find(selector)},Tabs.prototype.getRelatedAccordion=function(){var tab,filterElements;return filterElements=function(){var $elements;if(($elements=tab.getContainerAccordion().filter(function(){var $that,accordion;return void 0===(accordion=($that=$(this)).data("vc.accordion"))&&($that.vcAccordion(),accordion=$that.data("vc.accordion")),tab.getSelector()===accordion.getSelector()})).length)return $elements},(tab=this).isCacheUsed()?(void 0===this.$relatedAccordion&&(this.$relatedAccordion=filterElements()),this.$relatedAccordion):filterElements()},Tabs.prototype.triggerEvent=function(event){var $event;"string"==typeof event&&($event=$.Event(event),this.$element.trigger($event))},Tabs.prototype.getTargetTab=function(){var $this;return $this=this.$element,this.isCacheUsed()?(void 0===this.$targetTab&&(this.$targetTab=$this.closest(this.tabSelector)),this.$targetTab):$this.closest(this.tabSelector)},Tabs.prototype.tabClick=function(){this.getRelatedAccordion().trigger("click")},Tabs.prototype.show=function(){this.getTargetTab().hasClass(this.activeClass)||(this.triggerEvent("show.vc.tab"),this.getTargetTab().addClass(this.activeClass))},Tabs.prototype.hide=function(){this.getTargetTab().hasClass(this.activeClass)&&(this.triggerEvent("hide.vc.tab"),this.getTargetTab().removeClass(this.activeClass))},old=$.fn.vcTabs,$.fn.vcTabs=Plugin,$.fn.vcTabs.Constructor=Tabs,$.fn.vcTabs.noConflict=function(){return $.fn.vcTabs=old,this},clickHandler=function(e){var $this;$this=$(this),e.preventDefault(),Plugin.call($this,"tabClick")},changeHandler=function(e){var caller;void 0===(caller=$(e.target).data("vc.accordion")).getRelatedTab&&(caller.getRelatedTab=function(){var findTargets;return findTargets=function(){return caller.getContainer().find("[data-vc-tabs]").filter(function(){var $this;return void 0===($this=$(this)).data("vc.accordion")&&$this.vcAccordion(),$this.data("vc.accordion").getSelector()===caller.getSelector()})},caller.isCacheUsed()?(void 0===caller.relatedTab&&(caller.relatedTab=findTargets()),caller.relatedTab):findTargets()}),Plugin.call(caller.getRelatedTab(),e.type)},$(document).on("click.vc.tabs.data-api","[data-vc-tabs]",clickHandler),$(document).on("show.vc.accordion hide.vc.accordion",changeHandler)}(window.jQuery);(function(){var require=undefined;var define=undefined;(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){'use strict';var _conditionalElements=_interopRequireDefault(require("./forms/conditional-elements.js"));function _interopRequireDefault(obj){return obj&&obj.__esModule?obj:{"default":obj}}
var mc4wp=window.mc4wp||{};var Gator=require('gator');var forms=require('./forms/forms.js');var config=window.mc4wp_forms_config||{};var scrollToElement=require('scroll-to-element');function scrollToForm(form){var animate=config.auto_scroll==='animated';scrollToElement(form.element,{duration:animate?800:1,alignment:'middle'})}
function handleFormRequest(form,eventName,errors,data){var timeStart=Date.now();var pageHeight=document.body.clientHeight;if(errors){form.setData(data)}
if(window.scrollY<=10&&config.auto_scroll){scrollToForm(form)}
window.addEventListener('load',function(){forms.trigger(form.id+'.submitted',[form]);forms.trigger('submitted',[form]);if(errors){forms.trigger(form.id+'.error',[form,errors]);forms.trigger('error',[form,errors])}else{forms.trigger(form.id+'.success',[form,data]);forms.trigger('success',[form,data]);forms.trigger(form.id+"."+eventName,[form,data]);forms.trigger(eventName,[form,data]);if(eventName==='updated_subscriber'){forms.trigger(form.id+"."+"subscribed",[form,data,!0]);forms.trigger('subscribed',[form,data,!0])}}
var timeElapsed=Date.now()-timeStart;if(config.auto_scroll&&timeElapsed>1000&&timeElapsed<2000&&document.body.clientHeight!==pageHeight){scrollToForm(form)}})}
Gator(document.body).on('submit','.mc4wp-form',function(event){var form=forms.getByElement(event.target||event.srcElement);if(!event.defaultPrevented){forms.trigger(form.id+'.submit',[form,event])}
if(!event.defaultPrevented){forms.trigger('submit',[form,event])}});Gator(document.body).on('focus','.mc4wp-form',function(event){var form=forms.getByElement(event.target||event.srcElement);if(!form.started){forms.trigger(form.id+'.started',[form,event]);forms.trigger('started',[form,event]);form.started=!0}});Gator(document.body).on('change','.mc4wp-form',function(event){var form=forms.getByElement(event.target||event.srcElement);forms.trigger('change',[form,event]);forms.trigger(form.id+'.change',[form,event])});_conditionalElements["default"].init();if(mc4wp.listeners){var listeners=mc4wp.listeners;for(var i=0;i<listeners.length;i++){forms.on(listeners[i].event,listeners[i].callback)}
delete mc4wp.listeners}
mc4wp.forms=forms;if(config.submitted_form){var formConfig=config.submitted_form,element=document.getElementById(formConfig.element_id),form=forms.getByElement(element);handleFormRequest(form,formConfig.event,formConfig.errors,formConfig.data)}
window.mc4wp=mc4wp},{"./forms/conditional-elements.js":2,"./forms/forms.js":4,"gator":6,"scroll-to-element":13}],2:[function(require,module,exports){'use strict';Object.defineProperty(exports,"__esModule",{value:!0});exports["default"]=void 0;function getFieldValues(form,fieldName){var values=[];var inputs=form.querySelectorAll('input[name="'+fieldName+'"], select[name="'+fieldName+'"], textarea[name="'+fieldName+'"]');for(var i=0;i<inputs.length;i++){var input=inputs[i];var type=input.getAttribute("type");if((type==="radio"||type==="checkbox")&&!input.checked){continue}
values.push(input.value)}
return values}
function findForm(element){var bubbleElement=element;while(bubbleElement.parentElement){bubbleElement=bubbleElement.parentElement;if(bubbleElement.tagName==='FORM'){return bubbleElement}}
return null}
function toggleElement(el){var show=!!el.getAttribute('data-show-if');var conditions=show?el.getAttribute('data-show-if').split(':'):el.getAttribute('data-hide-if').split(':');var fieldName=conditions[0];var expectedValues=(conditions.length>1?conditions[1]:"*").split('|');var form=findForm(el);var values=getFieldValues(form,fieldName);var conditionMet=!1;for(var i=0;i<values.length;i++){var value=values[i];conditionMet=expectedValues.indexOf(value)>-1||expectedValues.indexOf('*')>-1&&value.length>0;if(conditionMet){break}}
if(show){el.style.display=conditionMet?'':'none'}else{el.style.display=conditionMet?'none':''}
var inputs=el.querySelectorAll('input, select, textarea');[].forEach.call(inputs,function(el){if((conditionMet||show)&&el.getAttribute('data-was-required')){el.required=!0;el.removeAttribute('data-was-required')}
if((!conditionMet||!show)&&el.required){el.setAttribute('data-was-required',"true");el.required=!1}})}
function evaluate(){var elements=document.querySelectorAll('.mc4wp-form [data-show-if], .mc4wp-form [data-hide-if]');[].forEach.call(elements,toggleElement)}
function handleInputEvent(evt){if(!evt.target||!evt.target.form||evt.target.form.className.indexOf('mc4wp-form')<0){return}
var form=evt.target.form;var elements=form.querySelectorAll('[data-show-if], [data-hide-if]');[].forEach.call(elements,toggleElement)}
var _default={'init':function init(){document.addEventListener('keyup',handleInputEvent,!0);document.addEventListener('change',handleInputEvent,!0);document.addEventListener('mc4wp-refresh',evaluate,!0);window.addEventListener('load',evaluate);evaluate()}};exports["default"]=_default},{}],3:[function(require,module,exports){'use strict';var serialize=require('form-serialize');var populate=require('populate.js');var Form=function Form(id,element){this.id=id;this.element=element||document.createElement('form');this.name=this.element.getAttribute('data-name')||"Form #"+this.id;this.errors=[];this.started=!1};Form.prototype.setData=function(data){try{populate(this.element,data)}catch(e){console.error(e)}};Form.prototype.getData=function(){return serialize(this.element,{hash:!0,empty:!0})};Form.prototype.getSerializedData=function(){return serialize(this.element,{hash:!1,empty:!0})};Form.prototype.setResponse=function(msg){this.element.querySelector('.mc4wp-response').innerHTML=msg};Form.prototype.reset=function(){this.setResponse('');this.element.querySelector('.mc4wp-form-fields').style.display='';this.element.reset()};module.exports=Form},{"form-serialize":5,"populate.js":7}],4:[function(require,module,exports){'use strict';var EventEmitter=require('wolfy87-eventemitter');var Form=require('./form.js');var events=new EventEmitter();var forms=[];function get(formId){formId=parseInt(formId);for(var i=0;i<forms.length;i++){if(forms[i].id===formId){return forms[i]}}
var formElement=document.querySelector('.mc4wp-form-'+formId);return createFromElement(formElement,formId)}
function getByElement(element){var formElement=element.form||element;for(var i=0;i<forms.length;i++){if(forms[i].element===formElement){return forms[i]}}
return createFromElement(formElement)}
function createFromElement(formElement,id){id=id||parseInt(formElement.getAttribute('data-id'))||0;var form=new Form(id,formElement);forms.push(form);return form}
function all(){return forms}
function triggerEvent(eventName,eventArgs){if(eventName==='submit'||eventName.indexOf('.submit')>0){events.trigger(eventName,eventArgs)}else{window.setTimeout(function(){events.trigger(eventName,eventArgs)},1)}}
module.exports={"all":all,"get":get,"getByElement":getByElement,"on":events.on.bind(events),"trigger":triggerEvent,"off":events.off.bind(events)}},{"./form.js":3,"wolfy87-eventemitter":16}],5:[function(require,module,exports){var k_r_submitter=/^(?:submit|button|image|reset|file)$/i;var k_r_success_contrls=/^(?:input|select|textarea|keygen)/i;var brackets=/(\[[^\[\]]*\])/g;function serialize(form,options){if(typeof options!='object'){options={hash:!!options}}else if(options.hash===undefined){options.hash=!0}
var result=(options.hash)?{}:'';var serializer=options.serializer||((options.hash)?hash_serializer:str_serialize);var elements=form&&form.elements?form.elements:[];var radio_store=Object.create(null);for(var i=0;i<elements.length;++i){var element=elements[i];if((!options.disabled&&element.disabled)||!element.name){continue}
if(!k_r_success_contrls.test(element.nodeName)||k_r_submitter.test(element.type)){continue}
var key=element.name;var val=element.value;if((element.type==='checkbox'||element.type==='radio')&&!element.checked){val=undefined}
if(options.empty){if(element.type==='checkbox'&&!element.checked){val=''}
if(element.type==='radio'){if(!radio_store[element.name]&&!element.checked){radio_store[element.name]=!1}else if(element.checked){radio_store[element.name]=!0}}
if(val==undefined&&element.type=='radio'){continue}}else{if(!val){continue}}
if(element.type==='select-multiple'){val=[];var selectOptions=element.options;var isSelectedOptions=!1;for(var j=0;j<selectOptions.length;++j){var option=selectOptions[j];var allowedEmpty=options.empty&&!option.value;var hasValue=(option.value||allowedEmpty);if(option.selected&&hasValue){isSelectedOptions=!0;if(options.hash&&key.slice(key.length-2)!=='[]'){result=serializer(result,key+'[]',option.value)}else{result=serializer(result,key,option.value)}}}
if(!isSelectedOptions&&options.empty){result=serializer(result,key,'')}
continue}
result=serializer(result,key,val)}
if(options.empty){for(var key in radio_store){if(!radio_store[key]){result=serializer(result,key,'')}}}
return result}
function parse_keys(string){var keys=[];var prefix=/^([^\[\]]*)/;var children=new RegExp(brackets);var match=prefix.exec(string);if(match[1]){keys.push(match[1])}
while((match=children.exec(string))!==null){keys.push(match[1])}
return keys}
function hash_assign(result,keys,value){if(keys.length===0){result=value;return result}
var key=keys.shift();var between=key.match(/^\[(.+?)\]$/);if(key==='[]'){result=result||[];if(Array.isArray(result)){result.push(hash_assign(null,keys,value))}else{result._values=result._values||[];result._values.push(hash_assign(null,keys,value))}
return result}
if(!between){result[key]=hash_assign(result[key],keys,value)}else{var string=between[1];var index=+string;if(isNaN(index)){result=result||{};result[string]=hash_assign(result[string],keys,value)}else{result=result||[];result[index]=hash_assign(result[index],keys,value)}}
return result}
function hash_serializer(result,key,value){var matches=key.match(brackets);if(matches){var keys=parse_keys(key);hash_assign(result,keys,value)}else{var existing=result[key];if(existing){if(!Array.isArray(existing)){result[key]=[existing]}
result[key].push(value)}else{result[key]=value}}
return result}
function str_serialize(result,key,value){value=value.replace(/(\r)?\n/g,'\r\n');value=encodeURIComponent(value);value=value.replace(/%20/g,'+');return result+(result?'&':'')+encodeURIComponent(key)+'='+value}
module.exports=serialize},{}],6:[function(require,module,exports){
/**
 * Copyright 2014 Craig Campbell
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * GATOR.JS
 * Simple Event Delegation
 *
 * @version 1.2.4
 *
 * Compatible with IE 9+, FF 3.6+, Safari 5+, Chrome
 *
 * Include legacy.js for compatibility with older browsers
 *
 *             .-._   _ _ _ _ _ _ _ _
 *  .-''-.__.-'00  '-' ' ' ' ' ' ' ' '-.
 * '.___ '    .   .--_'-' '-' '-' _'-' '._
 *  V: V 'vv-'   '_   '.       .'  _..' '.'.
 *    '=.____.=_.--'   :_.__.__:_   '.   : :
 *            (((____.-'        '-.  /   : :
 *                              (((-'\ .' /
 *                            _____..'  .'
 *                           '-._____.-'
 */
(function() {
    var _matcher,
        _level = 0,
        _id = 0,
        _handlers = {},
        _gatorInstances = {};

    function _addEvent(gator, type, callback) {

        // blur and focus do not bubble up but if you use event capturing
        // then you will get them
        var useCapture = type == 'blur' || type == 'focus';
        gator.element.addEventListener(type, callback, useCapture);
    }

    function _cancel(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    /**
     * returns function to use for determining if an element
     * matches a query selector
     *
     * @returns {Function}
     */
    function _getMatcher(element) {
        if (_matcher) {
            return _matcher;
        }

        if (element.matches) {
            _matcher = element.matches;
            return _matcher;
        }

        if (element.webkitMatchesSelector) {
            _matcher = element.webkitMatchesSelector;
            return _matcher;
        }

        if (element.mozMatchesSelector) {
            _matcher = element.mozMatchesSelector;
            return _matcher;
        }

        if (element.msMatchesSelector) {
            _matcher = element.msMatchesSelector;
            return _matcher;
        }

        if (element.oMatchesSelector) {
            _matcher = element.oMatchesSelector;
            return _matcher;
        }

        // if it doesn't match a native browser method
        // fall back to the gator function
        _matcher = Gator.matchesSelector;
        return _matcher;
    }

    /**
     * determines if the specified element matches a given selector
     *
     * @param {Node} element - the element to compare against the selector
     * @param {string} selector
     * @param {Node} boundElement - the element the listener was attached to
     * @returns {void|Node}
     */
    function _matchesSelector(element, selector, boundElement) {

        // no selector means this event was bound directly to this element
        if (selector == '_root') {
            return boundElement;
        }

        // if we have moved up to the element you bound the event to
        // then we have come too far
        if (element === boundElement) {
            return;
        }

        // if this is a match then we are done!
        if (_getMatcher(element).call(element, selector)) {
            return element;
        }

        // if this element did not match but has a parent we should try
        // going up the tree to see if any of the parent elements match
        // for example if you are looking for a click on an <a> tag but there
        // is a <span> inside of the a tag that it is the target,
        // it should still work
        if (element.parentNode) {
            _level++;
            return _matchesSelector(element.parentNode, selector, boundElement);
        }
    }

    function _addHandler(gator, event, selector, callback) {
        if (!_handlers[gator.id]) {
            _handlers[gator.id] = {};
        }

        if (!_handlers[gator.id][event]) {
            _handlers[gator.id][event] = {};
        }

        if (!_handlers[gator.id][event][selector]) {
            _handlers[gator.id][event][selector] = [];
        }

        _handlers[gator.id][event][selector].push(callback);
    }

    function _removeHandler(gator, event, selector, callback) {

        // if there are no events tied to this element at all
        // then don't do anything
        if (!_handlers[gator.id]) {
            return;
        }

        // if there is no event type specified then remove all events
        // example: Gator(element).off()
        if (!event) {
            for (var type in _handlers[gator.id]) {
                if (_handlers[gator.id].hasOwnProperty(type)) {
                    _handlers[gator.id][type] = {};
                }
            }
            return;
        }

        // if no callback or selector is specified remove all events of this type
        // example: Gator(element).off('click')
        if (!callback && !selector) {
            _handlers[gator.id][event] = {};
            return;
        }

        // if a selector is specified but no callback remove all events
        // for this selector
        // example: Gator(element).off('click', '.sub-element')
        if (!callback) {
            delete _handlers[gator.id][event][selector];
            return;
        }

        // if we have specified an event type, selector, and callback then we
        // need to make sure there are callbacks tied to this selector to
        // begin with.  if there aren't then we can stop here
        if (!_handlers[gator.id][event][selector]) {
            return;
        }

        // if there are then loop through all the callbacks and if we find
        // one that matches remove it from the array
        for (var i = 0; i < _handlers[gator.id][event][selector].length; i++) {
            if (_handlers[gator.id][event][selector][i] === callback) {
                _handlers[gator.id][event][selector].splice(i, 1);
                break;
            }
        }
    }

    function _handleEvent(id, e, type) {
        if (!_handlers[id][type]) {
            return;
        }

        var target = e.target || e.srcElement,
            selector,
            match,
            matches = {},
            i = 0,
            j = 0;

        // find all events that match
        _level = 0;
        for (selector in _handlers[id][type]) {
            if (_handlers[id][type].hasOwnProperty(selector)) {
                match = _matchesSelector(target, selector, _gatorInstances[id].element);

                if (match && Gator.matchesEvent(type, _gatorInstances[id].element, match, selector == '_root', e)) {
                    _level++;
                    _handlers[id][type][selector].match = match;
                    matches[_level] = _handlers[id][type][selector];
                }
            }
        }

        // stopPropagation() fails to set cancelBubble to true in Webkit
        // @see http://code.google.com/p/chromium/issues/detail?id=162270
        e.stopPropagation = function() {
            e.cancelBubble = true;
        };

        for (i = 0; i <= _level; i++) {
            if (matches[i]) {
                for (j = 0; j < matches[i].length; j++) {
                    if (matches[i][j].call(matches[i].match, e) === false) {
                        Gator.cancel(e);
                        return;
                    }

                    if (e.cancelBubble) {
                        return;
                    }
                }
            }
        }
    }

    /**
     * binds the specified events to the element
     *
     * @param {string|Array} events
     * @param {string} selector
     * @param {Function} callback
     * @param {boolean=} remove
     * @returns {Object}
     */
    function _bind(events, selector, callback, remove) {

        // fail silently if you pass null or undefined as an alement
        // in the Gator constructor
        if (!this.element) {
            return;
        }

        if (!(events instanceof Array)) {
            events = [events];
        }

        if (!callback && typeof(selector) == 'function') {
            callback = selector;
            selector = '_root';
        }

        var id = this.id,
            i;

        function _getGlobalCallback(type) {
            return function(e) {
                _handleEvent(id, e, type);
            };
        }

        for (i = 0; i < events.length; i++) {
            if (remove) {
                _removeHandler(this, events[i], selector, callback);
                continue;
            }

            if (!_handlers[id] || !_handlers[id][events[i]]) {
                Gator.addEvent(this, events[i], _getGlobalCallback(events[i]));
            }

            _addHandler(this, events[i], selector, callback);
        }

        return this;
    }

    /**
     * Gator object constructor
     *
     * @param {Node} element
     */
    function Gator(element, id) {

        // called as function
        if (!(this instanceof Gator)) {
            // only keep one Gator instance per node to make sure that
            // we don't create a ton of new objects if you want to delegate
            // multiple events from the same node
            //
            // for example: Gator(document).on(...
            for (var key in _gatorInstances) {
                if (_gatorInstances[key].element === element) {
                    return _gatorInstances[key];
                }
            }

            _id++;
            _gatorInstances[_id] = new Gator(element, _id);

            return _gatorInstances[_id];
        }

        this.element = element;
        this.id = id;
    }

    /**
     * adds an event
     *
     * @param {string|Array} events
     * @param {string} selector
     * @param {Function} callback
     * @returns {Object}
     */
    Gator.prototype.on = function(events, selector, callback) {
        return _bind.call(this, events, selector, callback);
    };

    /**
     * removes an event
     *
     * @param {string|Array} events
     * @param {string} selector
     * @param {Function} callback
     * @returns {Object}
     */
    Gator.prototype.off = function(events, selector, callback) {
        return _bind.call(this, events, selector, callback, true);
    };

    Gator.matchesSelector = function() {};
    Gator.cancel = _cancel;
    Gator.addEvent = _addEvent;
    Gator.matchesEvent = function() {
        return true;
    };

    if (typeof module !== 'undefined' && module.exports) {
        module.exports = Gator;
    }

    window.Gator = Gator;
}) ();

},{}],7:[function(require,module,exports){
/*! populate.js v1.0.2 by @dannyvankooten | MIT license */
;(function(root) {

	/**
	 * Populate form fields from a JSON object.
	 *
	 * @param form object The form element containing your input fields.
	 * @param data array JSON data to populate the fields with.
	 * @param basename string Optional basename which is added to `name` attributes
	 */
	var populate = function( form, data, basename) {

		for(var key in data) {

			if( ! data.hasOwnProperty( key ) ) {
				continue;
			}

			var name = key;
			var value = data[key];

                        if ('undefined' === typeof value) {
                            value = '';
                        }

                        if (null === value) {
                            value = '';
                        }

			// handle array name attributes
			if(typeof(basename) !== "undefined") {
				name = basename + "[" + key + "]";
			}

			if(value.constructor === Array) {
				name += '[]';
			} else if(typeof value == "object") {
				populate( form, value, name);
				continue;
			}

			// only proceed if element is set
			var element = form.elements.namedItem( name );
			if( ! element ) {
				continue;
			}

			var type = element.type || element[0].type;

			switch(type ) {
				default:
					element.value = value;
					break;

				case 'radio':
				case 'checkbox':
					for( var j=0; j < element.length; j++ ) {
						element[j].checked = ( value.indexOf(element[j].value) > -1 );
					}
					break;

				case 'select-multiple':
					var values = value.constructor == Array ? value : [value];

					for(var k = 0; k < element.options.length; k++) {
						element.options[k].selected |= (values.indexOf(element.options[k].value) > -1 );
					}
					break;

				case 'select':
				case 'select-one':
					element.value = value.toString() || value;
					break;
				case 'date':
          				element.value = new Date(value).toISOString().split('T')[0];
					break;
			}

		}

	};

	// Play nice with AMD, CommonJS or a plain global object.
	if ( typeof define == 'function' && typeof define.amd == 'object' && define.amd ) {
		define(function() {
			return populate;
		});
	}	else if ( typeof module !== 'undefined' && module.exports ) {
		module.exports = populate;
	} else {
		root.populate = populate;
	}

}(this));

},{}],8:[function(require,module,exports){
// shim for using process in browser
var process = module.exports = {};

// cached from whatever global is present so that test runners that stub it
// don't break things.  But we need to wrap it in a try catch in case it is
// wrapped in strict mode code which doesn't define any globals.  It's inside a
// function because try/catches deoptimize in certain engines.

var cachedSetTimeout;
var cachedClearTimeout;

function defaultSetTimout() {
    throw new Error('setTimeout has not been defined');
}
function defaultClearTimeout () {
    throw new Error('clearTimeout has not been defined');
}
(function () {
    try {
        if (typeof setTimeout === 'function') {
            cachedSetTimeout = setTimeout;
        } else {
            cachedSetTimeout = defaultSetTimout;
        }
    } catch (e) {
        cachedSetTimeout = defaultSetTimout;
    }
    try {
        if (typeof clearTimeout === 'function') {
            cachedClearTimeout = clearTimeout;
        } else {
            cachedClearTimeout = defaultClearTimeout;
        }
    } catch (e) {
        cachedClearTimeout = defaultClearTimeout;
    }
} ())
function runTimeout(fun) {
    if (cachedSetTimeout === setTimeout) {
        //normal enviroments in sane situations
        return setTimeout(fun, 0);
    }
    // if setTimeout wasn't available but was latter defined
    if ((cachedSetTimeout === defaultSetTimout || !cachedSetTimeout) && setTimeout) {
        cachedSetTimeout = setTimeout;
        return setTimeout(fun, 0);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedSetTimeout(fun, 0);
    } catch(e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't trust the global object when called normally
            return cachedSetTimeout.call(null, fun, 0);
        } catch(e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error
            return cachedSetTimeout.call(this, fun, 0);
        }
    }


}
function runClearTimeout(marker) {
    if (cachedClearTimeout === clearTimeout) {
        //normal enviroments in sane situations
        return clearTimeout(marker);
    }
    // if clearTimeout wasn't available but was latter defined
    if ((cachedClearTimeout === defaultClearTimeout || !cachedClearTimeout) && clearTimeout) {
        cachedClearTimeout = clearTimeout;
        return clearTimeout(marker);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedClearTimeout(marker);
    } catch (e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't  trust the global object when called normally
            return cachedClearTimeout.call(null, marker);
        } catch (e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error.
            // Some versions of I.E. have different rules for clearTimeout vs setTimeout
            return cachedClearTimeout.call(this, marker);
        }
    }



}
var queue = [];
var draining = false;
var currentQueue;
var queueIndex = -1;

function cleanUpNextTick() {
    if (!draining || !currentQueue) {
        return;
    }
    draining = false;
    if (currentQueue.length) {
        queue = currentQueue.concat(queue);
    } else {
        queueIndex = -1;
    }
    if (queue.length) {
        drainQueue();
    }
}

function drainQueue() {
    if (draining) {
        return;
    }
    var timeout = runTimeout(cleanUpNextTick);
    draining = true;

    var len = queue.length;
    while(len) {
        currentQueue = queue;
        queue = [];
        while (++queueIndex < len) {
            if (currentQueue) {
                currentQueue[queueIndex].run();
            }
        }
        queueIndex = -1;
        len = queue.length;
    }
    currentQueue = null;
    draining = false;
    runClearTimeout(timeout);
}

process.nextTick = function (fun) {
    var args = new Array(arguments.length - 1);
    if (arguments.length > 1) {
        for (var i = 1; i < arguments.length; i++) {
            args[i - 1] = arguments[i];
        }
    }
    queue.push(new Item(fun, args));
    if (queue.length === 1 && !draining) {
        runTimeout(drainQueue);
    }
};

// v8 likes predictible objects
function Item(fun, array) {
    this.fun = fun;
    this.array = array;
}
Item.prototype.run = function () {
    this.fun.apply(null, this.array);
};
process.title = 'browser';
process.browser = true;
process.env = {};
process.argv = [];
process.version = ''; // empty string to avoid regexp issues
process.versions = {};

function noop() {}

process.on = noop;
process.addListener = noop;
process.once = noop;
process.off = noop;
process.removeListener = noop;
process.removeAllListeners = noop;
process.emit = noop;
process.prependListener = noop;
process.prependOnceListener = noop;

process.listeners = function (name) { return [] }

process.binding = function (name) {
    throw new Error('process.binding is not supported');
};

process.cwd = function () { return '/' };
process.chdir = function (dir) {
    throw new Error('process.chdir is not supported');
};
process.umask = function() { return 0; };

},{}],9:[function(require,module,exports){
(function (global){
var now = require('performance-now')
  , root = typeof window === 'undefined' ? global : window
  , vendors = ['moz', 'webkit']
  , suffix = 'AnimationFrame'
  , raf = root['request' + suffix]
  , caf = root['cancel' + suffix] || root['cancelRequest' + suffix]

for(var i = 0; !raf && i < vendors.length; i++) {
  raf = root[vendors[i] + 'Request' + suffix]
  caf = root[vendors[i] + 'Cancel' + suffix]
      || root[vendors[i] + 'CancelRequest' + suffix]
}

// Some versions of FF have rAF but not cAF
if(!raf || !caf) {
  var last = 0
    , id = 0
    , queue = []
    , frameDuration = 1000 / 60

  raf = function(callback) {
    if(queue.length === 0) {
      var _now = now()
        , next = Math.max(0, frameDuration - (_now - last))
      last = next + _now
      setTimeout(function() {
        var cp = queue.slice(0)
        // Clear queue here to prevent
        // callbacks from appending listeners
        // to the current frame's queue
        queue.length = 0
        for(var i = 0; i < cp.length; i++) {
          if(!cp[i].cancelled) {
            try{
              cp[i].callback(last)
            } catch(e) {
              setTimeout(function() { throw e }, 0)
            }
          }
        }
      }, Math.round(next))
    }
    queue.push({
      handle: ++id,
      callback: callback,
      cancelled: false
    })
    return id
  }

  caf = function(handle) {
    for(var i = 0; i < queue.length; i++) {
      if(queue[i].handle === handle) {
        queue[i].cancelled = true
      }
    }
  }
}

module.exports = function(fn) {
  // Wrap in a new function to prevent
  // `cancel` potentially being assigned
  // to the native rAF function
  return raf.call(root, fn)
}
module.exports.cancel = function() {
  caf.apply(root, arguments)
}
module.exports.polyfill = function(object) {
  if (!object) {
    object = root;
  }
  object.requestAnimationFrame = raf
  object.cancelAnimationFrame = caf
}

}).call(this,typeof global !== "undefined" ? global : typeof self !== "undefined" ? self : typeof window !== "undefined" ? window : {})
},{"performance-now":10}],10:[function(require,module,exports){
(function (process){
// Generated by CoffeeScript 1.12.2
(function() {
  var getNanoSeconds, hrtime, loadTime, moduleLoadTime, nodeLoadTime, upTime;

  if ((typeof performance !== "undefined" && performance !== null) && performance.now) {
    module.exports = function() {
      return performance.now();
    };
  } else if ((typeof process !== "undefined" && process !== null) && process.hrtime) {
    module.exports = function() {
      return (getNanoSeconds() - nodeLoadTime) / 1e6;
    };
    hrtime = process.hrtime;
    getNanoSeconds = function() {
      var hr;
      hr = hrtime();
      return hr[0] * 1e9 + hr[1];
    };
    moduleLoadTime = getNanoSeconds();
    upTime = process.uptime() * 1e9;
    nodeLoadTime = moduleLoadTime - upTime;
  } else if (Date.now) {
    module.exports = function() {
      return Date.now() - loadTime;
    };
    loadTime = Date.now();
  } else {
    module.exports = function() {
      return new Date().getTime() - loadTime;
    };
    loadTime = new Date().getTime();
  }

}).call(this);



}).call(this,require('_process'))
},{"_process":8}],11:[function(require,module,exports){
// easing functions from "Tween.js"
exports.linear = function(n){
  return n;
};

exports.inQuad = function(n){
  return n * n;
};

exports.outQuad = function(n){
  return n * (2 - n);
};

exports.inOutQuad = function(n){
  n *= 2;
  if (n < 1) return 0.5 * n * n;
  return - 0.5 * (--n * (n - 2) - 1);
};

exports.inCube = function(n){
  return n * n * n;
};

exports.outCube = function(n){
  return --n * n * n + 1;
};

exports.inOutCube = function(n){
  n *= 2;
  if (n < 1) return 0.5 * n * n * n;
  return 0.5 * ((n -= 2 ) * n * n + 2);
};

exports.inQuart = function(n){
  return n * n * n * n;
};

exports.outQuart = function(n){
  return 1 - (--n * n * n * n);
};

exports.inOutQuart = function(n){
  n *= 2;
  if (n < 1) return 0.5 * n * n * n * n;
  return -0.5 * ((n -= 2) * n * n * n - 2);
};

exports.inQuint = function(n){
  return n * n * n * n * n;
}

exports.outQuint = function(n){
  return --n * n * n * n * n + 1;
}

exports.inOutQuint = function(n){
  n *= 2;
  if (n < 1) return 0.5 * n * n * n * n * n;
  return 0.5 * ((n -= 2) * n * n * n * n + 2);
};

exports.inSine = function(n){
  return 1 - Math.cos(n * Math.PI / 2 );
};

exports.outSine = function(n){
  return Math.sin(n * Math.PI / 2);
};

exports.inOutSine = function(n){
  return .5 * (1 - Math.cos(Math.PI * n));
};

exports.inExpo = function(n){
  return 0 == n ? 0 : Math.pow(1024, n - 1);
};

exports.outExpo = function(n){
  return 1 == n ? n : 1 - Math.pow(2, -10 * n);
};

exports.inOutExpo = function(n){
  if (0 == n) return 0;
  if (1 == n) return 1;
  if ((n *= 2) < 1) return .5 * Math.pow(1024, n - 1);
  return .5 * (-Math.pow(2, -10 * (n - 1)) + 2);
};

exports.inCirc = function(n){
  return 1 - Math.sqrt(1 - n * n);
};

exports.outCirc = function(n){
  return Math.sqrt(1 - (--n * n));
};

exports.inOutCirc = function(n){
  n *= 2
  if (n < 1) return -0.5 * (Math.sqrt(1 - n * n) - 1);
  return 0.5 * (Math.sqrt(1 - (n -= 2) * n) + 1);
};

exports.inBack = function(n){
  var s = 1.70158;
  return n * n * (( s + 1 ) * n - s);
};

exports.outBack = function(n){
  var s = 1.70158;
  return --n * n * ((s + 1) * n + s) + 1;
};

exports.inOutBack = function(n){
  var s = 1.70158 * 1.525;
  if ( ( n *= 2 ) < 1 ) return 0.5 * ( n * n * ( ( s + 1 ) * n - s ) );
  return 0.5 * ( ( n -= 2 ) * n * ( ( s + 1 ) * n + s ) + 2 );
};

exports.inBounce = function(n){
  return 1 - exports.outBounce(1 - n);
};

exports.outBounce = function(n){
  if ( n < ( 1 / 2.75 ) ) {
    return 7.5625 * n * n;
  } else if ( n < ( 2 / 2.75 ) ) {
    return 7.5625 * ( n -= ( 1.5 / 2.75 ) ) * n + 0.75;
  } else if ( n < ( 2.5 / 2.75 ) ) {
    return 7.5625 * ( n -= ( 2.25 / 2.75 ) ) * n + 0.9375;
  } else {
    return 7.5625 * ( n -= ( 2.625 / 2.75 ) ) * n + 0.984375;
  }
};

exports.inOutBounce = function(n){
  if (n < .5) return exports.inBounce(n * 2) * .5;
  return exports.outBounce(n * 2 - 1) * .5 + .5;
};

exports.inElastic = function(n){
  var s, a = 0.1, p = 0.4;
  if ( n === 0 ) return 0;
  if ( n === 1 ) return 1;
  if ( !a || a < 1 ) { a = 1; s = p / 4; }
  else s = p * Math.asin( 1 / a ) / ( 2 * Math.PI );
  return - ( a * Math.pow( 2, 10 * ( n -= 1 ) ) * Math.sin( ( n - s ) * ( 2 * Math.PI ) / p ) );
};

exports.outElastic = function(n){
  var s, a = 0.1, p = 0.4;
  if ( n === 0 ) return 0;
  if ( n === 1 ) return 1;
  if ( !a || a < 1 ) { a = 1; s = p / 4; }
  else s = p * Math.asin( 1 / a ) / ( 2 * Math.PI );
  return ( a * Math.pow( 2, - 10 * n) * Math.sin( ( n - s ) * ( 2 * Math.PI ) / p ) + 1 );
};

exports.inOutElastic = function(n){
  var s, a = 0.1, p = 0.4;
  if ( n === 0 ) return 0;
  if ( n === 1 ) return 1;
  if ( !a || a < 1 ) { a = 1; s = p / 4; }
  else s = p * Math.asin( 1 / a ) / ( 2 * Math.PI );
  if ( ( n *= 2 ) < 1 ) return - 0.5 * ( a * Math.pow( 2, 10 * ( n -= 1 ) ) * Math.sin( ( n - s ) * ( 2 * Math.PI ) / p ) );
  return a * Math.pow( 2, -10 * ( n -= 1 ) ) * Math.sin( ( n - s ) * ( 2 * Math.PI ) / p ) * 0.5 + 1;
};

// aliases
exports['in-quad'] = exports.inQuad;
exports['out-quad'] = exports.outQuad;
exports['in-out-quad'] = exports.inOutQuad;
exports['in-cube'] = exports.inCube;
exports['out-cube'] = exports.outCube;
exports['in-out-cube'] = exports.inOutCube;
exports['in-quart'] = exports.inQuart;
exports['out-quart'] = exports.outQuart;
exports['in-out-quart'] = exports.inOutQuart;
exports['in-quint'] = exports.inQuint;
exports['out-quint'] = exports.outQuint;
exports['in-out-quint'] = exports.inOutQuint;
exports['in-sine'] = exports.inSine;
exports['out-sine'] = exports.outSine;
exports['in-out-sine'] = exports.inOutSine;
exports['in-expo'] = exports.inExpo;
exports['out-expo'] = exports.outExpo;
exports['in-out-expo'] = exports.inOutExpo;
exports['in-circ'] = exports.inCirc;
exports['out-circ'] = exports.outCirc;
exports['in-out-circ'] = exports.inOutCirc;
exports['in-back'] = exports.inBack;
exports['out-back'] = exports.outBack;
exports['in-out-back'] = exports.inOutBack;
exports['in-bounce'] = exports.inBounce;
exports['out-bounce'] = exports.outBounce;
exports['in-out-bounce'] = exports.inOutBounce;
exports['in-elastic'] = exports.inElastic;
exports['out-elastic'] = exports.outElastic;
exports['in-out-elastic'] = exports.inOutElastic;

},{}],12:[function(require,module,exports){
function Emitter(obj) {
  if (obj) return mixin(obj);
};

function mixin(obj) {
  for (var key in Emitter.prototype) {
    obj[key] = Emitter.prototype[key];
  }
  return obj;
}

Emitter.prototype.on =
Emitter.prototype.addEventListener = function(event, fn){
  this._callbacks = this._callbacks || {};
  (this._callbacks['$' + event] = this._callbacks['$' + event] || [])
    .push(fn);
  return this;
};

Emitter.prototype.once = function(event, fn){
  function on() {
    this.off(event, on);
    fn.apply(this, arguments);
  }

  on.fn = fn;
  this.on(event, on);
  return this;
};

Emitter.prototype.off =
Emitter.prototype.removeListener =
Emitter.prototype.removeAllListeners =
Emitter.prototype.removeEventListener = function(event, fn){
  this._callbacks = this._callbacks || {};

  // all
  if (0 == arguments.length) {
    this._callbacks = {};
    return this;
  }

  // specific event
  var callbacks = this._callbacks['$' + event];
  if (!callbacks) return this;

  // remove all handlers
  if (1 == arguments.length) {
    delete this._callbacks['$' + event];
    return this;
  }

  // remove specific handler
  var cb;
  for (var i = 0; i < callbacks.length; i++) {
    cb = callbacks[i];
    if (cb === fn || cb.fn === fn) {
      callbacks.splice(i, 1);
      break;
    }
  }

  // Remove event specific arrays for event types that no
  // one is subscribed for to avoid memory leak.
  if (callbacks.length === 0) {
    delete this._callbacks['$' + event];
  }

  return this;
};

Emitter.prototype.emit = function(event){
  this._callbacks = this._callbacks || {};
  var args = [].slice.call(arguments, 1)
    , callbacks = this._callbacks['$' + event];

  if (callbacks) {
    callbacks = callbacks.slice(0);
    for (var i = 0, len = callbacks.length; i < len; ++i) {
      callbacks[i].apply(this, args);
    }
  }

  return this;
};

Emitter.prototype.listeners = function(event){
  this._callbacks = this._callbacks || {};
  return this._callbacks['$' + event] || [];
};

Emitter.prototype.hasListeners = function(event){
  return !! this.listeners(event).length;
};

if (typeof module !== 'undefined') {
  module.exports = Emitter;
}

},{}],13:[function(require,module,exports){
var scroll = require('./scroll-to');

function calculateScrollOffset(elem, additionalOffset, alignment) {
  var body = document.body,
      html = document.documentElement;

  var elemRect = elem.getBoundingClientRect();
  var clientHeight = html.clientHeight;
  var documentHeight = Math.max( body.scrollHeight, body.offsetHeight,
                                 html.clientHeight, html.scrollHeight, html.offsetHeight );

  additionalOffset = additionalOffset || 0;

  var scrollPosition;
  if (alignment === 'bottom') {
    scrollPosition = elemRect.bottom - clientHeight;
  } else if (alignment === 'middle') {
    scrollPosition = elemRect.bottom - clientHeight / 2 - elemRect.height / 2;
  } else { // top and default
    scrollPosition = elemRect.top;
  }

  var maxScrollPosition = documentHeight - clientHeight;
  return Math.min(scrollPosition + additionalOffset + window.pageYOffset,
                  maxScrollPosition);
}

module.exports = function (elem, options) {
  options = options || {};
  if (typeof elem === 'string') elem = document.querySelector(elem);
  if (elem) return scroll(0, calculateScrollOffset(elem, options.offset, options.align), options);
};

},{"./scroll-to":14}],14:[function(require,module,exports){
var Tween = require('./tween');
var raf = require('raf');

function scroll() {
  var y = window.pageYOffset || document.documentElement.scrollTop;
  var x = window.pageXOffset || document.documentElement.scrollLeft;
  return { top: y, left: x };
}

function scrollTo(x, y, options) {
  options = options || {};

  // start position
  var start = scroll();

  // setup tween
  var tween = Tween(start)
    .ease(options.ease || 'out-circ')
    .to({ top: y, left: x })
    .duration(options.duration || 1000);

  // scroll
  tween.update(function(o){
    window.scrollTo(o.left | 0, o.top | 0);
  });

  // handle end
  tween.on('end', function(){
    animate = function(){};
  });

  // animate
  function animate() {
    raf(animate);
    tween.update();
  }

  animate();

  return tween;
}

module.exports = scrollTo;

},{"./tween":15,"raf":9}],15:[function(require,module,exports){
var ease = require('./ease');
var Emitter = require('./emitter');

function extend(obj, src) {
  for (var key in src) {
    if (src.hasOwnProperty(key)) obj[key] = src[key];
  }
  return obj;
}

function Tween(obj) {
  if (!(this instanceof Tween)) return new Tween(obj);
  this._from = obj;
  this.ease('linear');
  this.duration(500);
}

Emitter(Tween.prototype);

Tween.prototype.reset = function(){
  this.isArray = Object.prototype.toString.call(this._from) === '[object Array]';
  this._curr = extend({}, this._from);
  this._done = false;
  this._start = Date.now();
  return this;
};

Tween.prototype.to = function(obj){
  this.reset();
  this._to = obj;
  return this;
};

Tween.prototype.duration = function(ms){
  this._duration = ms;
  return this;
};

Tween.prototype.ease = function(fn){
  fn = 'function' == typeof fn ? fn : ease[fn];
  if (!fn) throw new TypeError('invalid easing function');
  this._ease = fn;
  return this;
};

Tween.prototype.stop = function(){
  this.stopped = true;
  this._done = true;
  this.emit('stop');
  this.emit('end');
  return this;
};

Tween.prototype.step = function(){
  if (this._done) return;

  var duration = this._duration;
  var now = Date.now();
  var delta = now - this._start;
  var done = delta >= duration;

  if (done) {
    this._from = this._to;
    this._update(this._to);
    this._done = true;
    this.emit('end');
    return this;
  }

  var from = this._from;
  var to = this._to;
  var curr = this._curr;
  var fn = this._ease;
  var p = (now - this._start) / duration;
  var n = fn(p);

  if (this.isArray) {
    for (var i = 0; i < from.length; ++i) {
      curr[i] = from[i] + (to[i] - from[i]) * n;
    }

    this._update(curr);
    return this;
  }

  for (var k in from) {
    curr[k] = from[k] + (to[k] - from[k]) * n;
  }

  this._update(curr);
  return this;
};

Tween.prototype.update = function(fn){
  if (0 == arguments.length) return this.step();
  this._update = fn;
  return this;
};

module.exports = Tween;

},{"./ease":11,"./emitter":12}],16:[function(require,module,exports){
/*!
 * EventEmitter v5.2.6 - git.io/ee
 * Unlicense - http://unlicense.org/
 * Oliver Caldwell - https://oli.me.uk/
 * @preserve
 */
;(function(exports){'use strict';function EventEmitter(){}
var proto=EventEmitter.prototype;var originalGlobalValue=exports.EventEmitter;function indexOfListener(listeners,listener){var i=listeners.length;while(i--){if(listeners[i].listener===listener){return i}}
return-1}
function alias(name){return function aliasClosure(){return this[name].apply(this,arguments)}}
proto.getListeners=function getListeners(evt){var events=this._getEvents();var response;var key;if(evt instanceof RegExp){response={};for(key in events){if(events.hasOwnProperty(key)&&evt.test(key)){response[key]=events[key]}}}else{response=events[evt]||(events[evt]=[])}
return response};proto.flattenListeners=function flattenListeners(listeners){var flatListeners=[];var i;for(i=0;i<listeners.length;i+=1){flatListeners.push(listeners[i].listener)}
return flatListeners};proto.getListenersAsObject=function getListenersAsObject(evt){var listeners=this.getListeners(evt);var response;if(listeners instanceof Array){response={};response[evt]=listeners}
return response||listeners};function isValidListener(listener){if(typeof listener==='function'||listener instanceof RegExp){return!0}else if(listener&&typeof listener==='object'){return isValidListener(listener.listener)}else{return!1}}
proto.addListener=function addListener(evt,listener){if(!isValidListener(listener)){throw new TypeError('listener must be a function')}
var listeners=this.getListenersAsObject(evt);var listenerIsWrapped=typeof listener==='object';var key;for(key in listeners){if(listeners.hasOwnProperty(key)&&indexOfListener(listeners[key],listener)===-1){listeners[key].push(listenerIsWrapped?listener:{listener:listener,once:!1})}}
return this};proto.on=alias('addListener');proto.addOnceListener=function addOnceListener(evt,listener){return this.addListener(evt,{listener:listener,once:!0})};proto.once=alias('addOnceListener');proto.defineEvent=function defineEvent(evt){this.getListeners(evt);return this};proto.defineEvents=function defineEvents(evts){for(var i=0;i<evts.length;i+=1){this.defineEvent(evts[i])}
return this};proto.removeListener=function removeListener(evt,listener){var listeners=this.getListenersAsObject(evt);var index;var key;for(key in listeners){if(listeners.hasOwnProperty(key)){index=indexOfListener(listeners[key],listener);if(index!==-1){listeners[key].splice(index,1)}}}
return this};proto.off=alias('removeListener');proto.addListeners=function addListeners(evt,listeners){return this.manipulateListeners(!1,evt,listeners)};proto.removeListeners=function removeListeners(evt,listeners){return this.manipulateListeners(!0,evt,listeners)};proto.manipulateListeners=function manipulateListeners(remove,evt,listeners){var i;var value;var single=remove?this.removeListener:this.addListener;var multiple=remove?this.removeListeners:this.addListeners;if(typeof evt==='object'&&!(evt instanceof RegExp)){for(i in evt){if(evt.hasOwnProperty(i)&&(value=evt[i])){if(typeof value==='function'){single.call(this,i,value)}else{multiple.call(this,i,value)}}}}else{i=listeners.length;while(i--){single.call(this,evt,listeners[i])}}
return this};proto.removeEvent=function removeEvent(evt){var type=typeof evt;var events=this._getEvents();var key;if(type==='string'){delete events[evt]}else if(evt instanceof RegExp){for(key in events){if(events.hasOwnProperty(key)&&evt.test(key)){delete events[key]}}}else{delete this._events}
return this};proto.removeAllListeners=alias('removeEvent');proto.emitEvent=function emitEvent(evt,args){var listenersMap=this.getListenersAsObject(evt);var listeners;var listener;var i;var key;var response;for(key in listenersMap){if(listenersMap.hasOwnProperty(key)){listeners=listenersMap[key].slice(0);for(i=0;i<listeners.length;i++){listener=listeners[i];if(listener.once===!0){this.removeListener(evt,listener.listener)}
response=listener.listener.apply(this,args||[]);if(response===this._getOnceReturnValue()){this.removeListener(evt,listener.listener)}}}}
return this};proto.trigger=alias('emitEvent');proto.emit=function emit(evt){var args=Array.prototype.slice.call(arguments,1);return this.emitEvent(evt,args)};proto.setOnceReturnValue=function setOnceReturnValue(value){this._onceReturnValue=value;return this};proto._getOnceReturnValue=function _getOnceReturnValue(){if(this.hasOwnProperty('_onceReturnValue')){return this._onceReturnValue}else{return!0}};proto._getEvents=function _getEvents(){return this._events||(this._events={})};EventEmitter.noConflict=function noConflict(){exports.EventEmitter=originalGlobalValue;return EventEmitter};if(typeof define==='function'&&define.amd){define(function(){return EventEmitter})}else if(typeof module==='object'&&module.exports){module.exports=EventEmitter}else{exports.EventEmitter=EventEmitter}}(typeof window!=='undefined'?window:this||{}))},{}]},{},[1])})()
