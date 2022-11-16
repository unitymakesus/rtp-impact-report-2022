/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./source/_assets/js/main.js":
/*!***********************************!*\
  !*** ./source/_assets/js/main.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var focus_visible__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! focus-visible */ "./node_modules/focus-visible/dist/focus-visible.js");
/* harmony import */ var focus_visible__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(focus_visible__WEBPACK_IMPORTED_MODULE_0__);


/***/ }),

/***/ "./node_modules/focus-visible/dist/focus-visible.js":
/*!**********************************************************!*\
  !*** ./node_modules/focus-visible/dist/focus-visible.js ***!
  \**********************************************************/
/***/ (function() {

eval("(function (global, factory) {\n   true ? factory() :\n  0;\n}(this, (function () { 'use strict';\n\n  /**\n   * Applies the :focus-visible polyfill at the given scope.\n   * A scope in this case is either the top-level Document or a Shadow Root.\n   *\n   * @param {(Document|ShadowRoot)} scope\n   * @see https://github.com/WICG/focus-visible\n   */\n  function applyFocusVisiblePolyfill(scope) {\n    var hadKeyboardEvent = true;\n    var hadFocusVisibleRecently = false;\n    var hadFocusVisibleRecentlyTimeout = null;\n\n    var inputTypesAllowlist = {\n      text: true,\n      search: true,\n      url: true,\n      tel: true,\n      email: true,\n      password: true,\n      number: true,\n      date: true,\n      month: true,\n      week: true,\n      time: true,\n      datetime: true,\n      'datetime-local': true\n    };\n\n    /**\n     * Helper function for legacy browsers and iframes which sometimes focus\n     * elements like document, body, and non-interactive SVG.\n     * @param {Element} el\n     */\n    function isValidFocusTarget(el) {\n      if (\n        el &&\n        el !== document &&\n        el.nodeName !== 'HTML' &&\n        el.nodeName !== 'BODY' &&\n        'classList' in el &&\n        'contains' in el.classList\n      ) {\n        return true;\n      }\n      return false;\n    }\n\n    /**\n     * Computes whether the given element should automatically trigger the\n     * `focus-visible` class being added, i.e. whether it should always match\n     * `:focus-visible` when focused.\n     * @param {Element} el\n     * @return {boolean}\n     */\n    function focusTriggersKeyboardModality(el) {\n      var type = el.type;\n      var tagName = el.tagName;\n\n      if (tagName === 'INPUT' && inputTypesAllowlist[type] && !el.readOnly) {\n        return true;\n      }\n\n      if (tagName === 'TEXTAREA' && !el.readOnly) {\n        return true;\n      }\n\n      if (el.isContentEditable) {\n        return true;\n      }\n\n      return false;\n    }\n\n    /**\n     * Add the `focus-visible` class to the given element if it was not added by\n     * the author.\n     * @param {Element} el\n     */\n    function addFocusVisibleClass(el) {\n      if (el.classList.contains('focus-visible')) {\n        return;\n      }\n      el.classList.add('focus-visible');\n      el.setAttribute('data-focus-visible-added', '');\n    }\n\n    /**\n     * Remove the `focus-visible` class from the given element if it was not\n     * originally added by the author.\n     * @param {Element} el\n     */\n    function removeFocusVisibleClass(el) {\n      if (!el.hasAttribute('data-focus-visible-added')) {\n        return;\n      }\n      el.classList.remove('focus-visible');\n      el.removeAttribute('data-focus-visible-added');\n    }\n\n    /**\n     * If the most recent user interaction was via the keyboard;\n     * and the key press did not include a meta, alt/option, or control key;\n     * then the modality is keyboard. Otherwise, the modality is not keyboard.\n     * Apply `focus-visible` to any current active element and keep track\n     * of our keyboard modality state with `hadKeyboardEvent`.\n     * @param {KeyboardEvent} e\n     */\n    function onKeyDown(e) {\n      if (e.metaKey || e.altKey || e.ctrlKey) {\n        return;\n      }\n\n      if (isValidFocusTarget(scope.activeElement)) {\n        addFocusVisibleClass(scope.activeElement);\n      }\n\n      hadKeyboardEvent = true;\n    }\n\n    /**\n     * If at any point a user clicks with a pointing device, ensure that we change\n     * the modality away from keyboard.\n     * This avoids the situation where a user presses a key on an already focused\n     * element, and then clicks on a different element, focusing it with a\n     * pointing device, while we still think we're in keyboard modality.\n     * @param {Event} e\n     */\n    function onPointerDown(e) {\n      hadKeyboardEvent = false;\n    }\n\n    /**\n     * On `focus`, add the `focus-visible` class to the target if:\n     * - the target received focus as a result of keyboard navigation, or\n     * - the event target is an element that will likely require interaction\n     *   via the keyboard (e.g. a text box)\n     * @param {Event} e\n     */\n    function onFocus(e) {\n      // Prevent IE from focusing the document or HTML element.\n      if (!isValidFocusTarget(e.target)) {\n        return;\n      }\n\n      if (hadKeyboardEvent || focusTriggersKeyboardModality(e.target)) {\n        addFocusVisibleClass(e.target);\n      }\n    }\n\n    /**\n     * On `blur`, remove the `focus-visible` class from the target.\n     * @param {Event} e\n     */\n    function onBlur(e) {\n      if (!isValidFocusTarget(e.target)) {\n        return;\n      }\n\n      if (\n        e.target.classList.contains('focus-visible') ||\n        e.target.hasAttribute('data-focus-visible-added')\n      ) {\n        // To detect a tab/window switch, we look for a blur event followed\n        // rapidly by a visibility change.\n        // If we don't see a visibility change within 100ms, it's probably a\n        // regular focus change.\n        hadFocusVisibleRecently = true;\n        window.clearTimeout(hadFocusVisibleRecentlyTimeout);\n        hadFocusVisibleRecentlyTimeout = window.setTimeout(function() {\n          hadFocusVisibleRecently = false;\n        }, 100);\n        removeFocusVisibleClass(e.target);\n      }\n    }\n\n    /**\n     * If the user changes tabs, keep track of whether or not the previously\n     * focused element had .focus-visible.\n     * @param {Event} e\n     */\n    function onVisibilityChange(e) {\n      if (document.visibilityState === 'hidden') {\n        // If the tab becomes active again, the browser will handle calling focus\n        // on the element (Safari actually calls it twice).\n        // If this tab change caused a blur on an element with focus-visible,\n        // re-apply the class when the user switches back to the tab.\n        if (hadFocusVisibleRecently) {\n          hadKeyboardEvent = true;\n        }\n        addInitialPointerMoveListeners();\n      }\n    }\n\n    /**\n     * Add a group of listeners to detect usage of any pointing devices.\n     * These listeners will be added when the polyfill first loads, and anytime\n     * the window is blurred, so that they are active when the window regains\n     * focus.\n     */\n    function addInitialPointerMoveListeners() {\n      document.addEventListener('mousemove', onInitialPointerMove);\n      document.addEventListener('mousedown', onInitialPointerMove);\n      document.addEventListener('mouseup', onInitialPointerMove);\n      document.addEventListener('pointermove', onInitialPointerMove);\n      document.addEventListener('pointerdown', onInitialPointerMove);\n      document.addEventListener('pointerup', onInitialPointerMove);\n      document.addEventListener('touchmove', onInitialPointerMove);\n      document.addEventListener('touchstart', onInitialPointerMove);\n      document.addEventListener('touchend', onInitialPointerMove);\n    }\n\n    function removeInitialPointerMoveListeners() {\n      document.removeEventListener('mousemove', onInitialPointerMove);\n      document.removeEventListener('mousedown', onInitialPointerMove);\n      document.removeEventListener('mouseup', onInitialPointerMove);\n      document.removeEventListener('pointermove', onInitialPointerMove);\n      document.removeEventListener('pointerdown', onInitialPointerMove);\n      document.removeEventListener('pointerup', onInitialPointerMove);\n      document.removeEventListener('touchmove', onInitialPointerMove);\n      document.removeEventListener('touchstart', onInitialPointerMove);\n      document.removeEventListener('touchend', onInitialPointerMove);\n    }\n\n    /**\n     * When the polfyill first loads, assume the user is in keyboard modality.\n     * If any event is received from a pointing device (e.g. mouse, pointer,\n     * touch), turn off keyboard modality.\n     * This accounts for situations where focus enters the page from the URL bar.\n     * @param {Event} e\n     */\n    function onInitialPointerMove(e) {\n      // Work around a Safari quirk that fires a mousemove on <html> whenever the\n      // window blurs, even if you're tabbing out of the page. ¯\\_(ツ)_/¯\n      if (e.target.nodeName && e.target.nodeName.toLowerCase() === 'html') {\n        return;\n      }\n\n      hadKeyboardEvent = false;\n      removeInitialPointerMoveListeners();\n    }\n\n    // For some kinds of state, we are interested in changes at the global scope\n    // only. For example, global pointer input, global key presses and global\n    // visibility change should affect the state at every scope:\n    document.addEventListener('keydown', onKeyDown, true);\n    document.addEventListener('mousedown', onPointerDown, true);\n    document.addEventListener('pointerdown', onPointerDown, true);\n    document.addEventListener('touchstart', onPointerDown, true);\n    document.addEventListener('visibilitychange', onVisibilityChange, true);\n\n    addInitialPointerMoveListeners();\n\n    // For focus and blur, we specifically care about state changes in the local\n    // scope. This is because focus / blur events that originate from within a\n    // shadow root are not re-dispatched from the host element if it was already\n    // the active element in its own scope:\n    scope.addEventListener('focus', onFocus, true);\n    scope.addEventListener('blur', onBlur, true);\n\n    // We detect that a node is a ShadowRoot by ensuring that it is a\n    // DocumentFragment and also has a host property. This check covers native\n    // implementation and polyfill implementation transparently. If we only cared\n    // about the native implementation, we could just check if the scope was\n    // an instance of a ShadowRoot.\n    if (scope.nodeType === Node.DOCUMENT_FRAGMENT_NODE && scope.host) {\n      // Since a ShadowRoot is a special kind of DocumentFragment, it does not\n      // have a root element to add a class to. So, we add this attribute to the\n      // host element instead:\n      scope.host.setAttribute('data-js-focus-visible', '');\n    } else if (scope.nodeType === Node.DOCUMENT_NODE) {\n      document.documentElement.classList.add('js-focus-visible');\n      document.documentElement.setAttribute('data-js-focus-visible', '');\n    }\n  }\n\n  // It is important to wrap all references to global window and document in\n  // these checks to support server-side rendering use cases\n  // @see https://github.com/WICG/focus-visible/issues/199\n  if (typeof window !== 'undefined' && typeof document !== 'undefined') {\n    // Make the polyfill helper globally available. This can be used as a signal\n    // to interested libraries that wish to coordinate with the polyfill for e.g.,\n    // applying the polyfill to a shadow root:\n    window.applyFocusVisiblePolyfill = applyFocusVisiblePolyfill;\n\n    // Notify interested libraries of the polyfill's presence, in case the\n    // polyfill was loaded lazily:\n    var event;\n\n    try {\n      event = new CustomEvent('focus-visible-polyfill-ready');\n    } catch (error) {\n      // IE11 does not support using CustomEvent as a constructor directly:\n      event = document.createEvent('CustomEvent');\n      event.initCustomEvent('focus-visible-polyfill-ready', false, false, {});\n    }\n\n    window.dispatchEvent(event);\n  }\n\n  if (typeof document !== 'undefined') {\n    // Apply the polyfill to the global document, so that no JavaScript\n    // coordination is required to use the polyfill in the top-level document:\n    applyFocusVisiblePolyfill(document);\n  }\n\n})));\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9ub2RlX21vZHVsZXMvZm9jdXMtdmlzaWJsZS9kaXN0L2ZvY3VzLXZpc2libGUuanMuanMiLCJtYXBwaW5ncyI6IkFBQUE7QUFDQSxFQUFFLEtBQTREO0FBQzlELEVBQUUsQ0FDVztBQUNiLENBQUMsc0JBQXNCOztBQUV2QjtBQUNBO0FBQ0E7QUFDQTtBQUNBLGFBQWEsdUJBQXVCO0FBQ3BDO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsZUFBZSxTQUFTO0FBQ3hCO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQSxlQUFlLFNBQVM7QUFDeEIsZ0JBQWdCO0FBQ2hCO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsZUFBZSxTQUFTO0FBQ3hCO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsZUFBZSxTQUFTO0FBQ3hCO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsZUFBZSxlQUFlO0FBQzlCO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsZUFBZSxPQUFPO0FBQ3RCO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxlQUFlLE9BQU87QUFDdEI7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQSxlQUFlLE9BQU87QUFDdEI7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxTQUFTO0FBQ1Q7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBLGVBQWUsT0FBTztBQUN0QjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLGVBQWUsT0FBTztBQUN0QjtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxNQUFNO0FBQ047QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBLE1BQU07QUFDTjtBQUNBO0FBQ0EsNEVBQTRFO0FBQzVFOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQSxDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vbm9kZV9tb2R1bGVzL2ZvY3VzLXZpc2libGUvZGlzdC9mb2N1cy12aXNpYmxlLmpzPzQwNDAiXSwic291cmNlc0NvbnRlbnQiOlsiKGZ1bmN0aW9uIChnbG9iYWwsIGZhY3RvcnkpIHtcbiAgdHlwZW9mIGV4cG9ydHMgPT09ICdvYmplY3QnICYmIHR5cGVvZiBtb2R1bGUgIT09ICd1bmRlZmluZWQnID8gZmFjdG9yeSgpIDpcbiAgdHlwZW9mIGRlZmluZSA9PT0gJ2Z1bmN0aW9uJyAmJiBkZWZpbmUuYW1kID8gZGVmaW5lKGZhY3RvcnkpIDpcbiAgKGZhY3RvcnkoKSk7XG59KHRoaXMsIChmdW5jdGlvbiAoKSB7ICd1c2Ugc3RyaWN0JztcblxuICAvKipcbiAgICogQXBwbGllcyB0aGUgOmZvY3VzLXZpc2libGUgcG9seWZpbGwgYXQgdGhlIGdpdmVuIHNjb3BlLlxuICAgKiBBIHNjb3BlIGluIHRoaXMgY2FzZSBpcyBlaXRoZXIgdGhlIHRvcC1sZXZlbCBEb2N1bWVudCBvciBhIFNoYWRvdyBSb290LlxuICAgKlxuICAgKiBAcGFyYW0geyhEb2N1bWVudHxTaGFkb3dSb290KX0gc2NvcGVcbiAgICogQHNlZSBodHRwczovL2dpdGh1Yi5jb20vV0lDRy9mb2N1cy12aXNpYmxlXG4gICAqL1xuICBmdW5jdGlvbiBhcHBseUZvY3VzVmlzaWJsZVBvbHlmaWxsKHNjb3BlKSB7XG4gICAgdmFyIGhhZEtleWJvYXJkRXZlbnQgPSB0cnVlO1xuICAgIHZhciBoYWRGb2N1c1Zpc2libGVSZWNlbnRseSA9IGZhbHNlO1xuICAgIHZhciBoYWRGb2N1c1Zpc2libGVSZWNlbnRseVRpbWVvdXQgPSBudWxsO1xuXG4gICAgdmFyIGlucHV0VHlwZXNBbGxvd2xpc3QgPSB7XG4gICAgICB0ZXh0OiB0cnVlLFxuICAgICAgc2VhcmNoOiB0cnVlLFxuICAgICAgdXJsOiB0cnVlLFxuICAgICAgdGVsOiB0cnVlLFxuICAgICAgZW1haWw6IHRydWUsXG4gICAgICBwYXNzd29yZDogdHJ1ZSxcbiAgICAgIG51bWJlcjogdHJ1ZSxcbiAgICAgIGRhdGU6IHRydWUsXG4gICAgICBtb250aDogdHJ1ZSxcbiAgICAgIHdlZWs6IHRydWUsXG4gICAgICB0aW1lOiB0cnVlLFxuICAgICAgZGF0ZXRpbWU6IHRydWUsXG4gICAgICAnZGF0ZXRpbWUtbG9jYWwnOiB0cnVlXG4gICAgfTtcblxuICAgIC8qKlxuICAgICAqIEhlbHBlciBmdW5jdGlvbiBmb3IgbGVnYWN5IGJyb3dzZXJzIGFuZCBpZnJhbWVzIHdoaWNoIHNvbWV0aW1lcyBmb2N1c1xuICAgICAqIGVsZW1lbnRzIGxpa2UgZG9jdW1lbnQsIGJvZHksIGFuZCBub24taW50ZXJhY3RpdmUgU1ZHLlxuICAgICAqIEBwYXJhbSB7RWxlbWVudH0gZWxcbiAgICAgKi9cbiAgICBmdW5jdGlvbiBpc1ZhbGlkRm9jdXNUYXJnZXQoZWwpIHtcbiAgICAgIGlmIChcbiAgICAgICAgZWwgJiZcbiAgICAgICAgZWwgIT09IGRvY3VtZW50ICYmXG4gICAgICAgIGVsLm5vZGVOYW1lICE9PSAnSFRNTCcgJiZcbiAgICAgICAgZWwubm9kZU5hbWUgIT09ICdCT0RZJyAmJlxuICAgICAgICAnY2xhc3NMaXN0JyBpbiBlbCAmJlxuICAgICAgICAnY29udGFpbnMnIGluIGVsLmNsYXNzTGlzdFxuICAgICAgKSB7XG4gICAgICAgIHJldHVybiB0cnVlO1xuICAgICAgfVxuICAgICAgcmV0dXJuIGZhbHNlO1xuICAgIH1cblxuICAgIC8qKlxuICAgICAqIENvbXB1dGVzIHdoZXRoZXIgdGhlIGdpdmVuIGVsZW1lbnQgc2hvdWxkIGF1dG9tYXRpY2FsbHkgdHJpZ2dlciB0aGVcbiAgICAgKiBgZm9jdXMtdmlzaWJsZWAgY2xhc3MgYmVpbmcgYWRkZWQsIGkuZS4gd2hldGhlciBpdCBzaG91bGQgYWx3YXlzIG1hdGNoXG4gICAgICogYDpmb2N1cy12aXNpYmxlYCB3aGVuIGZvY3VzZWQuXG4gICAgICogQHBhcmFtIHtFbGVtZW50fSBlbFxuICAgICAqIEByZXR1cm4ge2Jvb2xlYW59XG4gICAgICovXG4gICAgZnVuY3Rpb24gZm9jdXNUcmlnZ2Vyc0tleWJvYXJkTW9kYWxpdHkoZWwpIHtcbiAgICAgIHZhciB0eXBlID0gZWwudHlwZTtcbiAgICAgIHZhciB0YWdOYW1lID0gZWwudGFnTmFtZTtcblxuICAgICAgaWYgKHRhZ05hbWUgPT09ICdJTlBVVCcgJiYgaW5wdXRUeXBlc0FsbG93bGlzdFt0eXBlXSAmJiAhZWwucmVhZE9ubHkpIHtcbiAgICAgICAgcmV0dXJuIHRydWU7XG4gICAgICB9XG5cbiAgICAgIGlmICh0YWdOYW1lID09PSAnVEVYVEFSRUEnICYmICFlbC5yZWFkT25seSkge1xuICAgICAgICByZXR1cm4gdHJ1ZTtcbiAgICAgIH1cblxuICAgICAgaWYgKGVsLmlzQ29udGVudEVkaXRhYmxlKSB7XG4gICAgICAgIHJldHVybiB0cnVlO1xuICAgICAgfVxuXG4gICAgICByZXR1cm4gZmFsc2U7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogQWRkIHRoZSBgZm9jdXMtdmlzaWJsZWAgY2xhc3MgdG8gdGhlIGdpdmVuIGVsZW1lbnQgaWYgaXQgd2FzIG5vdCBhZGRlZCBieVxuICAgICAqIHRoZSBhdXRob3IuXG4gICAgICogQHBhcmFtIHtFbGVtZW50fSBlbFxuICAgICAqL1xuICAgIGZ1bmN0aW9uIGFkZEZvY3VzVmlzaWJsZUNsYXNzKGVsKSB7XG4gICAgICBpZiAoZWwuY2xhc3NMaXN0LmNvbnRhaW5zKCdmb2N1cy12aXNpYmxlJykpIHtcbiAgICAgICAgcmV0dXJuO1xuICAgICAgfVxuICAgICAgZWwuY2xhc3NMaXN0LmFkZCgnZm9jdXMtdmlzaWJsZScpO1xuICAgICAgZWwuc2V0QXR0cmlidXRlKCdkYXRhLWZvY3VzLXZpc2libGUtYWRkZWQnLCAnJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogUmVtb3ZlIHRoZSBgZm9jdXMtdmlzaWJsZWAgY2xhc3MgZnJvbSB0aGUgZ2l2ZW4gZWxlbWVudCBpZiBpdCB3YXMgbm90XG4gICAgICogb3JpZ2luYWxseSBhZGRlZCBieSB0aGUgYXV0aG9yLlxuICAgICAqIEBwYXJhbSB7RWxlbWVudH0gZWxcbiAgICAgKi9cbiAgICBmdW5jdGlvbiByZW1vdmVGb2N1c1Zpc2libGVDbGFzcyhlbCkge1xuICAgICAgaWYgKCFlbC5oYXNBdHRyaWJ1dGUoJ2RhdGEtZm9jdXMtdmlzaWJsZS1hZGRlZCcpKSB7XG4gICAgICAgIHJldHVybjtcbiAgICAgIH1cbiAgICAgIGVsLmNsYXNzTGlzdC5yZW1vdmUoJ2ZvY3VzLXZpc2libGUnKTtcbiAgICAgIGVsLnJlbW92ZUF0dHJpYnV0ZSgnZGF0YS1mb2N1cy12aXNpYmxlLWFkZGVkJyk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogSWYgdGhlIG1vc3QgcmVjZW50IHVzZXIgaW50ZXJhY3Rpb24gd2FzIHZpYSB0aGUga2V5Ym9hcmQ7XG4gICAgICogYW5kIHRoZSBrZXkgcHJlc3MgZGlkIG5vdCBpbmNsdWRlIGEgbWV0YSwgYWx0L29wdGlvbiwgb3IgY29udHJvbCBrZXk7XG4gICAgICogdGhlbiB0aGUgbW9kYWxpdHkgaXMga2V5Ym9hcmQuIE90aGVyd2lzZSwgdGhlIG1vZGFsaXR5IGlzIG5vdCBrZXlib2FyZC5cbiAgICAgKiBBcHBseSBgZm9jdXMtdmlzaWJsZWAgdG8gYW55IGN1cnJlbnQgYWN0aXZlIGVsZW1lbnQgYW5kIGtlZXAgdHJhY2tcbiAgICAgKiBvZiBvdXIga2V5Ym9hcmQgbW9kYWxpdHkgc3RhdGUgd2l0aCBgaGFkS2V5Ym9hcmRFdmVudGAuXG4gICAgICogQHBhcmFtIHtLZXlib2FyZEV2ZW50fSBlXG4gICAgICovXG4gICAgZnVuY3Rpb24gb25LZXlEb3duKGUpIHtcbiAgICAgIGlmIChlLm1ldGFLZXkgfHwgZS5hbHRLZXkgfHwgZS5jdHJsS2V5KSB7XG4gICAgICAgIHJldHVybjtcbiAgICAgIH1cblxuICAgICAgaWYgKGlzVmFsaWRGb2N1c1RhcmdldChzY29wZS5hY3RpdmVFbGVtZW50KSkge1xuICAgICAgICBhZGRGb2N1c1Zpc2libGVDbGFzcyhzY29wZS5hY3RpdmVFbGVtZW50KTtcbiAgICAgIH1cblxuICAgICAgaGFkS2V5Ym9hcmRFdmVudCA9IHRydWU7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogSWYgYXQgYW55IHBvaW50IGEgdXNlciBjbGlja3Mgd2l0aCBhIHBvaW50aW5nIGRldmljZSwgZW5zdXJlIHRoYXQgd2UgY2hhbmdlXG4gICAgICogdGhlIG1vZGFsaXR5IGF3YXkgZnJvbSBrZXlib2FyZC5cbiAgICAgKiBUaGlzIGF2b2lkcyB0aGUgc2l0dWF0aW9uIHdoZXJlIGEgdXNlciBwcmVzc2VzIGEga2V5IG9uIGFuIGFscmVhZHkgZm9jdXNlZFxuICAgICAqIGVsZW1lbnQsIGFuZCB0aGVuIGNsaWNrcyBvbiBhIGRpZmZlcmVudCBlbGVtZW50LCBmb2N1c2luZyBpdCB3aXRoIGFcbiAgICAgKiBwb2ludGluZyBkZXZpY2UsIHdoaWxlIHdlIHN0aWxsIHRoaW5rIHdlJ3JlIGluIGtleWJvYXJkIG1vZGFsaXR5LlxuICAgICAqIEBwYXJhbSB7RXZlbnR9IGVcbiAgICAgKi9cbiAgICBmdW5jdGlvbiBvblBvaW50ZXJEb3duKGUpIHtcbiAgICAgIGhhZEtleWJvYXJkRXZlbnQgPSBmYWxzZTtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBPbiBgZm9jdXNgLCBhZGQgdGhlIGBmb2N1cy12aXNpYmxlYCBjbGFzcyB0byB0aGUgdGFyZ2V0IGlmOlxuICAgICAqIC0gdGhlIHRhcmdldCByZWNlaXZlZCBmb2N1cyBhcyBhIHJlc3VsdCBvZiBrZXlib2FyZCBuYXZpZ2F0aW9uLCBvclxuICAgICAqIC0gdGhlIGV2ZW50IHRhcmdldCBpcyBhbiBlbGVtZW50IHRoYXQgd2lsbCBsaWtlbHkgcmVxdWlyZSBpbnRlcmFjdGlvblxuICAgICAqICAgdmlhIHRoZSBrZXlib2FyZCAoZS5nLiBhIHRleHQgYm94KVxuICAgICAqIEBwYXJhbSB7RXZlbnR9IGVcbiAgICAgKi9cbiAgICBmdW5jdGlvbiBvbkZvY3VzKGUpIHtcbiAgICAgIC8vIFByZXZlbnQgSUUgZnJvbSBmb2N1c2luZyB0aGUgZG9jdW1lbnQgb3IgSFRNTCBlbGVtZW50LlxuICAgICAgaWYgKCFpc1ZhbGlkRm9jdXNUYXJnZXQoZS50YXJnZXQpKSB7XG4gICAgICAgIHJldHVybjtcbiAgICAgIH1cblxuICAgICAgaWYgKGhhZEtleWJvYXJkRXZlbnQgfHwgZm9jdXNUcmlnZ2Vyc0tleWJvYXJkTW9kYWxpdHkoZS50YXJnZXQpKSB7XG4gICAgICAgIGFkZEZvY3VzVmlzaWJsZUNsYXNzKGUudGFyZ2V0KTtcbiAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBPbiBgYmx1cmAsIHJlbW92ZSB0aGUgYGZvY3VzLXZpc2libGVgIGNsYXNzIGZyb20gdGhlIHRhcmdldC5cbiAgICAgKiBAcGFyYW0ge0V2ZW50fSBlXG4gICAgICovXG4gICAgZnVuY3Rpb24gb25CbHVyKGUpIHtcbiAgICAgIGlmICghaXNWYWxpZEZvY3VzVGFyZ2V0KGUudGFyZ2V0KSkge1xuICAgICAgICByZXR1cm47XG4gICAgICB9XG5cbiAgICAgIGlmIChcbiAgICAgICAgZS50YXJnZXQuY2xhc3NMaXN0LmNvbnRhaW5zKCdmb2N1cy12aXNpYmxlJykgfHxcbiAgICAgICAgZS50YXJnZXQuaGFzQXR0cmlidXRlKCdkYXRhLWZvY3VzLXZpc2libGUtYWRkZWQnKVxuICAgICAgKSB7XG4gICAgICAgIC8vIFRvIGRldGVjdCBhIHRhYi93aW5kb3cgc3dpdGNoLCB3ZSBsb29rIGZvciBhIGJsdXIgZXZlbnQgZm9sbG93ZWRcbiAgICAgICAgLy8gcmFwaWRseSBieSBhIHZpc2liaWxpdHkgY2hhbmdlLlxuICAgICAgICAvLyBJZiB3ZSBkb24ndCBzZWUgYSB2aXNpYmlsaXR5IGNoYW5nZSB3aXRoaW4gMTAwbXMsIGl0J3MgcHJvYmFibHkgYVxuICAgICAgICAvLyByZWd1bGFyIGZvY3VzIGNoYW5nZS5cbiAgICAgICAgaGFkRm9jdXNWaXNpYmxlUmVjZW50bHkgPSB0cnVlO1xuICAgICAgICB3aW5kb3cuY2xlYXJUaW1lb3V0KGhhZEZvY3VzVmlzaWJsZVJlY2VudGx5VGltZW91dCk7XG4gICAgICAgIGhhZEZvY3VzVmlzaWJsZVJlY2VudGx5VGltZW91dCA9IHdpbmRvdy5zZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xuICAgICAgICAgIGhhZEZvY3VzVmlzaWJsZVJlY2VudGx5ID0gZmFsc2U7XG4gICAgICAgIH0sIDEwMCk7XG4gICAgICAgIHJlbW92ZUZvY3VzVmlzaWJsZUNsYXNzKGUudGFyZ2V0KTtcbiAgICAgIH1cbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBJZiB0aGUgdXNlciBjaGFuZ2VzIHRhYnMsIGtlZXAgdHJhY2sgb2Ygd2hldGhlciBvciBub3QgdGhlIHByZXZpb3VzbHlcbiAgICAgKiBmb2N1c2VkIGVsZW1lbnQgaGFkIC5mb2N1cy12aXNpYmxlLlxuICAgICAqIEBwYXJhbSB7RXZlbnR9IGVcbiAgICAgKi9cbiAgICBmdW5jdGlvbiBvblZpc2liaWxpdHlDaGFuZ2UoZSkge1xuICAgICAgaWYgKGRvY3VtZW50LnZpc2liaWxpdHlTdGF0ZSA9PT0gJ2hpZGRlbicpIHtcbiAgICAgICAgLy8gSWYgdGhlIHRhYiBiZWNvbWVzIGFjdGl2ZSBhZ2FpbiwgdGhlIGJyb3dzZXIgd2lsbCBoYW5kbGUgY2FsbGluZyBmb2N1c1xuICAgICAgICAvLyBvbiB0aGUgZWxlbWVudCAoU2FmYXJpIGFjdHVhbGx5IGNhbGxzIGl0IHR3aWNlKS5cbiAgICAgICAgLy8gSWYgdGhpcyB0YWIgY2hhbmdlIGNhdXNlZCBhIGJsdXIgb24gYW4gZWxlbWVudCB3aXRoIGZvY3VzLXZpc2libGUsXG4gICAgICAgIC8vIHJlLWFwcGx5IHRoZSBjbGFzcyB3aGVuIHRoZSB1c2VyIHN3aXRjaGVzIGJhY2sgdG8gdGhlIHRhYi5cbiAgICAgICAgaWYgKGhhZEZvY3VzVmlzaWJsZVJlY2VudGx5KSB7XG4gICAgICAgICAgaGFkS2V5Ym9hcmRFdmVudCA9IHRydWU7XG4gICAgICAgIH1cbiAgICAgICAgYWRkSW5pdGlhbFBvaW50ZXJNb3ZlTGlzdGVuZXJzKCk7XG4gICAgICB9XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogQWRkIGEgZ3JvdXAgb2YgbGlzdGVuZXJzIHRvIGRldGVjdCB1c2FnZSBvZiBhbnkgcG9pbnRpbmcgZGV2aWNlcy5cbiAgICAgKiBUaGVzZSBsaXN0ZW5lcnMgd2lsbCBiZSBhZGRlZCB3aGVuIHRoZSBwb2x5ZmlsbCBmaXJzdCBsb2FkcywgYW5kIGFueXRpbWVcbiAgICAgKiB0aGUgd2luZG93IGlzIGJsdXJyZWQsIHNvIHRoYXQgdGhleSBhcmUgYWN0aXZlIHdoZW4gdGhlIHdpbmRvdyByZWdhaW5zXG4gICAgICogZm9jdXMuXG4gICAgICovXG4gICAgZnVuY3Rpb24gYWRkSW5pdGlhbFBvaW50ZXJNb3ZlTGlzdGVuZXJzKCkge1xuICAgICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignbW91c2Vtb3ZlJywgb25Jbml0aWFsUG9pbnRlck1vdmUpO1xuICAgICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignbW91c2Vkb3duJywgb25Jbml0aWFsUG9pbnRlck1vdmUpO1xuICAgICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignbW91c2V1cCcsIG9uSW5pdGlhbFBvaW50ZXJNb3ZlKTtcbiAgICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ3BvaW50ZXJtb3ZlJywgb25Jbml0aWFsUG9pbnRlck1vdmUpO1xuICAgICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcigncG9pbnRlcmRvd24nLCBvbkluaXRpYWxQb2ludGVyTW92ZSk7XG4gICAgICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdwb2ludGVydXAnLCBvbkluaXRpYWxQb2ludGVyTW92ZSk7XG4gICAgICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCd0b3VjaG1vdmUnLCBvbkluaXRpYWxQb2ludGVyTW92ZSk7XG4gICAgICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCd0b3VjaHN0YXJ0Jywgb25Jbml0aWFsUG9pbnRlck1vdmUpO1xuICAgICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcigndG91Y2hlbmQnLCBvbkluaXRpYWxQb2ludGVyTW92ZSk7XG4gICAgfVxuXG4gICAgZnVuY3Rpb24gcmVtb3ZlSW5pdGlhbFBvaW50ZXJNb3ZlTGlzdGVuZXJzKCkge1xuICAgICAgZG9jdW1lbnQucmVtb3ZlRXZlbnRMaXN0ZW5lcignbW91c2Vtb3ZlJywgb25Jbml0aWFsUG9pbnRlck1vdmUpO1xuICAgICAgZG9jdW1lbnQucmVtb3ZlRXZlbnRMaXN0ZW5lcignbW91c2Vkb3duJywgb25Jbml0aWFsUG9pbnRlck1vdmUpO1xuICAgICAgZG9jdW1lbnQucmVtb3ZlRXZlbnRMaXN0ZW5lcignbW91c2V1cCcsIG9uSW5pdGlhbFBvaW50ZXJNb3ZlKTtcbiAgICAgIGRvY3VtZW50LnJlbW92ZUV2ZW50TGlzdGVuZXIoJ3BvaW50ZXJtb3ZlJywgb25Jbml0aWFsUG9pbnRlck1vdmUpO1xuICAgICAgZG9jdW1lbnQucmVtb3ZlRXZlbnRMaXN0ZW5lcigncG9pbnRlcmRvd24nLCBvbkluaXRpYWxQb2ludGVyTW92ZSk7XG4gICAgICBkb2N1bWVudC5yZW1vdmVFdmVudExpc3RlbmVyKCdwb2ludGVydXAnLCBvbkluaXRpYWxQb2ludGVyTW92ZSk7XG4gICAgICBkb2N1bWVudC5yZW1vdmVFdmVudExpc3RlbmVyKCd0b3VjaG1vdmUnLCBvbkluaXRpYWxQb2ludGVyTW92ZSk7XG4gICAgICBkb2N1bWVudC5yZW1vdmVFdmVudExpc3RlbmVyKCd0b3VjaHN0YXJ0Jywgb25Jbml0aWFsUG9pbnRlck1vdmUpO1xuICAgICAgZG9jdW1lbnQucmVtb3ZlRXZlbnRMaXN0ZW5lcigndG91Y2hlbmQnLCBvbkluaXRpYWxQb2ludGVyTW92ZSk7XG4gICAgfVxuXG4gICAgLyoqXG4gICAgICogV2hlbiB0aGUgcG9sZnlpbGwgZmlyc3QgbG9hZHMsIGFzc3VtZSB0aGUgdXNlciBpcyBpbiBrZXlib2FyZCBtb2RhbGl0eS5cbiAgICAgKiBJZiBhbnkgZXZlbnQgaXMgcmVjZWl2ZWQgZnJvbSBhIHBvaW50aW5nIGRldmljZSAoZS5nLiBtb3VzZSwgcG9pbnRlcixcbiAgICAgKiB0b3VjaCksIHR1cm4gb2ZmIGtleWJvYXJkIG1vZGFsaXR5LlxuICAgICAqIFRoaXMgYWNjb3VudHMgZm9yIHNpdHVhdGlvbnMgd2hlcmUgZm9jdXMgZW50ZXJzIHRoZSBwYWdlIGZyb20gdGhlIFVSTCBiYXIuXG4gICAgICogQHBhcmFtIHtFdmVudH0gZVxuICAgICAqL1xuICAgIGZ1bmN0aW9uIG9uSW5pdGlhbFBvaW50ZXJNb3ZlKGUpIHtcbiAgICAgIC8vIFdvcmsgYXJvdW5kIGEgU2FmYXJpIHF1aXJrIHRoYXQgZmlyZXMgYSBtb3VzZW1vdmUgb24gPGh0bWw+IHdoZW5ldmVyIHRoZVxuICAgICAgLy8gd2luZG93IGJsdXJzLCBldmVuIGlmIHlvdSdyZSB0YWJiaW5nIG91dCBvZiB0aGUgcGFnZS4gwq9cXF8o44OEKV8vwq9cbiAgICAgIGlmIChlLnRhcmdldC5ub2RlTmFtZSAmJiBlLnRhcmdldC5ub2RlTmFtZS50b0xvd2VyQ2FzZSgpID09PSAnaHRtbCcpIHtcbiAgICAgICAgcmV0dXJuO1xuICAgICAgfVxuXG4gICAgICBoYWRLZXlib2FyZEV2ZW50ID0gZmFsc2U7XG4gICAgICByZW1vdmVJbml0aWFsUG9pbnRlck1vdmVMaXN0ZW5lcnMoKTtcbiAgICB9XG5cbiAgICAvLyBGb3Igc29tZSBraW5kcyBvZiBzdGF0ZSwgd2UgYXJlIGludGVyZXN0ZWQgaW4gY2hhbmdlcyBhdCB0aGUgZ2xvYmFsIHNjb3BlXG4gICAgLy8gb25seS4gRm9yIGV4YW1wbGUsIGdsb2JhbCBwb2ludGVyIGlucHV0LCBnbG9iYWwga2V5IHByZXNzZXMgYW5kIGdsb2JhbFxuICAgIC8vIHZpc2liaWxpdHkgY2hhbmdlIHNob3VsZCBhZmZlY3QgdGhlIHN0YXRlIGF0IGV2ZXJ5IHNjb3BlOlxuICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ2tleWRvd24nLCBvbktleURvd24sIHRydWUpO1xuICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ21vdXNlZG93bicsIG9uUG9pbnRlckRvd24sIHRydWUpO1xuICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ3BvaW50ZXJkb3duJywgb25Qb2ludGVyRG93biwgdHJ1ZSk7XG4gICAgZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcigndG91Y2hzdGFydCcsIG9uUG9pbnRlckRvd24sIHRydWUpO1xuICAgIGRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ3Zpc2liaWxpdHljaGFuZ2UnLCBvblZpc2liaWxpdHlDaGFuZ2UsIHRydWUpO1xuXG4gICAgYWRkSW5pdGlhbFBvaW50ZXJNb3ZlTGlzdGVuZXJzKCk7XG5cbiAgICAvLyBGb3IgZm9jdXMgYW5kIGJsdXIsIHdlIHNwZWNpZmljYWxseSBjYXJlIGFib3V0IHN0YXRlIGNoYW5nZXMgaW4gdGhlIGxvY2FsXG4gICAgLy8gc2NvcGUuIFRoaXMgaXMgYmVjYXVzZSBmb2N1cyAvIGJsdXIgZXZlbnRzIHRoYXQgb3JpZ2luYXRlIGZyb20gd2l0aGluIGFcbiAgICAvLyBzaGFkb3cgcm9vdCBhcmUgbm90IHJlLWRpc3BhdGNoZWQgZnJvbSB0aGUgaG9zdCBlbGVtZW50IGlmIGl0IHdhcyBhbHJlYWR5XG4gICAgLy8gdGhlIGFjdGl2ZSBlbGVtZW50IGluIGl0cyBvd24gc2NvcGU6XG4gICAgc2NvcGUuYWRkRXZlbnRMaXN0ZW5lcignZm9jdXMnLCBvbkZvY3VzLCB0cnVlKTtcbiAgICBzY29wZS5hZGRFdmVudExpc3RlbmVyKCdibHVyJywgb25CbHVyLCB0cnVlKTtcblxuICAgIC8vIFdlIGRldGVjdCB0aGF0IGEgbm9kZSBpcyBhIFNoYWRvd1Jvb3QgYnkgZW5zdXJpbmcgdGhhdCBpdCBpcyBhXG4gICAgLy8gRG9jdW1lbnRGcmFnbWVudCBhbmQgYWxzbyBoYXMgYSBob3N0IHByb3BlcnR5LiBUaGlzIGNoZWNrIGNvdmVycyBuYXRpdmVcbiAgICAvLyBpbXBsZW1lbnRhdGlvbiBhbmQgcG9seWZpbGwgaW1wbGVtZW50YXRpb24gdHJhbnNwYXJlbnRseS4gSWYgd2Ugb25seSBjYXJlZFxuICAgIC8vIGFib3V0IHRoZSBuYXRpdmUgaW1wbGVtZW50YXRpb24sIHdlIGNvdWxkIGp1c3QgY2hlY2sgaWYgdGhlIHNjb3BlIHdhc1xuICAgIC8vIGFuIGluc3RhbmNlIG9mIGEgU2hhZG93Um9vdC5cbiAgICBpZiAoc2NvcGUubm9kZVR5cGUgPT09IE5vZGUuRE9DVU1FTlRfRlJBR01FTlRfTk9ERSAmJiBzY29wZS5ob3N0KSB7XG4gICAgICAvLyBTaW5jZSBhIFNoYWRvd1Jvb3QgaXMgYSBzcGVjaWFsIGtpbmQgb2YgRG9jdW1lbnRGcmFnbWVudCwgaXQgZG9lcyBub3RcbiAgICAgIC8vIGhhdmUgYSByb290IGVsZW1lbnQgdG8gYWRkIGEgY2xhc3MgdG8uIFNvLCB3ZSBhZGQgdGhpcyBhdHRyaWJ1dGUgdG8gdGhlXG4gICAgICAvLyBob3N0IGVsZW1lbnQgaW5zdGVhZDpcbiAgICAgIHNjb3BlLmhvc3Quc2V0QXR0cmlidXRlKCdkYXRhLWpzLWZvY3VzLXZpc2libGUnLCAnJyk7XG4gICAgfSBlbHNlIGlmIChzY29wZS5ub2RlVHlwZSA9PT0gTm9kZS5ET0NVTUVOVF9OT0RFKSB7XG4gICAgICBkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQuY2xhc3NMaXN0LmFkZCgnanMtZm9jdXMtdmlzaWJsZScpO1xuICAgICAgZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LnNldEF0dHJpYnV0ZSgnZGF0YS1qcy1mb2N1cy12aXNpYmxlJywgJycpO1xuICAgIH1cbiAgfVxuXG4gIC8vIEl0IGlzIGltcG9ydGFudCB0byB3cmFwIGFsbCByZWZlcmVuY2VzIHRvIGdsb2JhbCB3aW5kb3cgYW5kIGRvY3VtZW50IGluXG4gIC8vIHRoZXNlIGNoZWNrcyB0byBzdXBwb3J0IHNlcnZlci1zaWRlIHJlbmRlcmluZyB1c2UgY2FzZXNcbiAgLy8gQHNlZSBodHRwczovL2dpdGh1Yi5jb20vV0lDRy9mb2N1cy12aXNpYmxlL2lzc3Vlcy8xOTlcbiAgaWYgKHR5cGVvZiB3aW5kb3cgIT09ICd1bmRlZmluZWQnICYmIHR5cGVvZiBkb2N1bWVudCAhPT0gJ3VuZGVmaW5lZCcpIHtcbiAgICAvLyBNYWtlIHRoZSBwb2x5ZmlsbCBoZWxwZXIgZ2xvYmFsbHkgYXZhaWxhYmxlLiBUaGlzIGNhbiBiZSB1c2VkIGFzIGEgc2lnbmFsXG4gICAgLy8gdG8gaW50ZXJlc3RlZCBsaWJyYXJpZXMgdGhhdCB3aXNoIHRvIGNvb3JkaW5hdGUgd2l0aCB0aGUgcG9seWZpbGwgZm9yIGUuZy4sXG4gICAgLy8gYXBwbHlpbmcgdGhlIHBvbHlmaWxsIHRvIGEgc2hhZG93IHJvb3Q6XG4gICAgd2luZG93LmFwcGx5Rm9jdXNWaXNpYmxlUG9seWZpbGwgPSBhcHBseUZvY3VzVmlzaWJsZVBvbHlmaWxsO1xuXG4gICAgLy8gTm90aWZ5IGludGVyZXN0ZWQgbGlicmFyaWVzIG9mIHRoZSBwb2x5ZmlsbCdzIHByZXNlbmNlLCBpbiBjYXNlIHRoZVxuICAgIC8vIHBvbHlmaWxsIHdhcyBsb2FkZWQgbGF6aWx5OlxuICAgIHZhciBldmVudDtcblxuICAgIHRyeSB7XG4gICAgICBldmVudCA9IG5ldyBDdXN0b21FdmVudCgnZm9jdXMtdmlzaWJsZS1wb2x5ZmlsbC1yZWFkeScpO1xuICAgIH0gY2F0Y2ggKGVycm9yKSB7XG4gICAgICAvLyBJRTExIGRvZXMgbm90IHN1cHBvcnQgdXNpbmcgQ3VzdG9tRXZlbnQgYXMgYSBjb25zdHJ1Y3RvciBkaXJlY3RseTpcbiAgICAgIGV2ZW50ID0gZG9jdW1lbnQuY3JlYXRlRXZlbnQoJ0N1c3RvbUV2ZW50Jyk7XG4gICAgICBldmVudC5pbml0Q3VzdG9tRXZlbnQoJ2ZvY3VzLXZpc2libGUtcG9seWZpbGwtcmVhZHknLCBmYWxzZSwgZmFsc2UsIHt9KTtcbiAgICB9XG5cbiAgICB3aW5kb3cuZGlzcGF0Y2hFdmVudChldmVudCk7XG4gIH1cblxuICBpZiAodHlwZW9mIGRvY3VtZW50ICE9PSAndW5kZWZpbmVkJykge1xuICAgIC8vIEFwcGx5IHRoZSBwb2x5ZmlsbCB0byB0aGUgZ2xvYmFsIGRvY3VtZW50LCBzbyB0aGF0IG5vIEphdmFTY3JpcHRcbiAgICAvLyBjb29yZGluYXRpb24gaXMgcmVxdWlyZWQgdG8gdXNlIHRoZSBwb2x5ZmlsbCBpbiB0aGUgdG9wLWxldmVsIGRvY3VtZW50OlxuICAgIGFwcGx5Rm9jdXNWaXNpYmxlUG9seWZpbGwoZG9jdW1lbnQpO1xuICB9XG5cbn0pKSk7XG4iXSwibmFtZXMiOltdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./node_modules/focus-visible/dist/focus-visible.js\n");

/***/ }),

/***/ "./source/_assets/sass/main.scss":
/*!***************************************!*\
  !*** ./source/_assets/sass/main.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zb3VyY2UvX2Fzc2V0cy9zYXNzL21haW4uc2Nzcy5qcyIsIm1hcHBpbmdzIjoiO0FBQUEiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zb3VyY2UvX2Fzc2V0cy9zYXNzL21haW4uc2Nzcz9kY2NjIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6W10sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./source/_assets/sass/main.scss\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/main": 0,
/******/ 			"css/main": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./source/_assets/js/main.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/main"], () => (__webpack_require__("./source/_assets/sass/main.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;