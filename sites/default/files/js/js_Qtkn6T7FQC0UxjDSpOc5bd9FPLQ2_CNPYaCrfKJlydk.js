/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings) {
  var handleFragmentLinkClickOrHashChange = function handleFragmentLinkClickOrHashChange(e, $target) {
    $target.parents('.vertical-tabs__pane').each(function (index, pane) {
      $(pane).data('verticalTab').focus();
    });
  };

  Drupal.behaviors.verticalTabs = {
    attach: function attach(context) {
      var width = drupalSettings.widthBreakpoint || 640;
      var mq = '(max-width: ' + width + 'px)';

      if (window.matchMedia(mq).matches) {
        return;
      }

      $('body').once('vertical-tabs-fragments').on('formFragmentLinkClickOrHashChange.verticalTabs', handleFragmentLinkClickOrHashChange);

      $(context).find('[data-vertical-tabs-panes]').once('vertical-tabs').each(function () {
        var $this = $(this).addClass('vertical-tabs__panes');
        var focusID = $this.find(':hidden.vertical-tabs__active-tab').val();
        var tab_focus = void 0;

        var $details = $this.find('> details');
        if ($details.length === 0) {
          return;
        }

        var tab_list = $('<ul class="vertical-tabs__menu"></ul>');
        $this.wrap('<div class="vertical-tabs clearfix"></div>').before(tab_list);

        $details.each(function () {
          var $that = $(this);
          var vertical_tab = new Drupal.verticalTab({
            title: $that.find('> summary').text(),
            details: $that
          });
          tab_list.append(vertical_tab.item);
          $that.removeClass('collapsed').attr('open', true).addClass('vertical-tabs__pane').data('verticalTab', vertical_tab);
          if (this.id === focusID) {
            tab_focus = $that;
          }
        });

        $(tab_list).find('> li').eq(0).addClass('first');
        $(tab_list).find('> li').eq(-1).addClass('last');

        if (!tab_focus) {
          var $locationHash = $this.find(window.location.hash);
          if (window.location.hash && $locationHash.length) {
            tab_focus = $locationHash.closest('.vertical-tabs__pane');
          } else {
            tab_focus = $this.find('> .vertical-tabs__pane').eq(0);
          }
        }
        if (tab_focus.length) {
          tab_focus.data('verticalTab').focus();
        }
      });
    }
  };

  Drupal.verticalTab = function (settings) {
    var self = this;
    $.extend(this, settings, Drupal.theme('verticalTab', settings));

    this.link.attr('href', '#' + settings.details.attr('id'));

    this.link.on('click', function (e) {
      e.preventDefault();
      self.focus();
    });

    this.link.on('keydown', function (event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        self.focus();

        $('.vertical-tabs__pane :input:visible:enabled').eq(0).trigger('focus');
      }
    });

    this.details.on('summaryUpdated', function () {
      self.updateSummary();
    }).trigger('summaryUpdated');
  };

  Drupal.verticalTab.prototype = {
    focus: function focus() {
      this.details.siblings('.vertical-tabs__pane').each(function () {
        var tab = $(this).data('verticalTab');
        tab.details.hide();
        tab.item.removeClass('is-selected');
      }).end().show().siblings(':hidden.vertical-tabs__active-tab').val(this.details.attr('id'));
      this.item.addClass('is-selected');

      $('#active-vertical-tab').remove();
      this.link.append('<span id="active-vertical-tab" class="visually-hidden">' + Drupal.t('(active tab)') + '</span>');
    },
    updateSummary: function updateSummary() {
      this.summary.html(this.details.drupalGetSummary());
    },
    tabShow: function tabShow() {
      this.item.show();

      this.item.closest('.js-form-type-vertical-tabs').show();

      this.item.parent().children('.vertical-tabs__menu-item').removeClass('first').filter(':visible').eq(0).addClass('first');

      this.details.removeClass('vertical-tab--hidden').show();

      this.focus();
      return this;
    },
    tabHide: function tabHide() {
      this.item.hide();

      this.item.parent().children('.vertical-tabs__menu-item').removeClass('first').filter(':visible').eq(0).addClass('first');

      this.details.addClass('vertical-tab--hidden').hide();

      var $firstTab = this.details.siblings('.vertical-tabs__pane:not(.vertical-tab--hidden)').eq(0);
      if ($firstTab.length) {
        $firstTab.data('verticalTab').focus();
      } else {
          this.item.closest('.js-form-type-vertical-tabs').hide();
        }
      return this;
    }
  };

  Drupal.theme.verticalTab = function (settings) {
    var tab = {};
    tab.item = $('<li class="vertical-tabs__menu-item" tabindex="-1"></li>').append(tab.link = $('<a href="#"></a>').append(tab.title = $('<strong class="vertical-tabs__menu-item-title"></strong>').text(settings.title)).append(tab.summary = $('<span class="vertical-tabs__menu-item-summary"></span>')));
    return tab;
  };
})(jQuery, Drupal, drupalSettings);;
/**
 * @file
 * Block behaviors.
 */

(function ($, window) {

    'use strict';

    /**
     * Provide the summary information for the block settings vertical tabs.
     *
     * @type {Drupal~behavior}
     *
     * @prop {Drupal~behaviorAttach} attach
     *   Attaches the behavior for the block settings summaries.
     */
    Drupal.behaviors.blockSettingsSummaryGroup = {
        attach: function () {
            // The drupalSetSummary method required for this behavior is not available
            // on the Blocks administration page, so we need to make sure this
            // behavior is processed only if drupalSetSummary is defined.
            if (typeof jQuery.fn.drupalSetSummary === 'undefined') {
                return;
            }

            /**
             * Create a summary for checkboxes in the provided context.
             *
             * @param {HTMLDocument|HTMLElement} context
             *   A context where one would find checkboxes to summarize.
             *
             * @return {string}
             *   A string with the summary.
             */
            function checkboxesSummary(context) {
                var vals = [];
                var $checkboxes = $(context).find('input[type="checkbox"]:checked + label');
                var il = $checkboxes.length;
                for (var i = 0; i < il; i++) {
                    vals.push($($checkboxes[i]).html());
                }
                if (!vals.length) {
                    vals.push(Drupal.t('Not restricted'));
                }
                return vals.join(', ');
            }

            $('[data-drupal-selector="edit-visibility-group-type"]').drupalSetSummary(checkboxesSummary);
        }
    };

})(jQuery, window);
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, debounce) {
  $.fn.drupalGetSummary = function () {
    var callback = this.data('summaryCallback');
    return this[0] && callback ? $.trim(callback(this[0])) : '';
  };

  $.fn.drupalSetSummary = function (callback) {
    var self = this;

    if (typeof callback !== 'function') {
      var val = callback;
      callback = function callback() {
        return val;
      };
    }

    return this.data('summaryCallback', callback).off('formUpdated.summary').on('formUpdated.summary', function () {
      self.trigger('summaryUpdated');
    }).trigger('summaryUpdated');
  };

  Drupal.behaviors.formSingleSubmit = {
    attach: function attach() {
      function onFormSubmit(e) {
        var $form = $(e.currentTarget);
        var formValues = $form.serialize();
        var previousValues = $form.attr('data-drupal-form-submit-last');
        if (previousValues === formValues) {
          e.preventDefault();
        } else {
          $form.attr('data-drupal-form-submit-last', formValues);
        }
      }

      $('body').once('form-single-submit').on('submit.singleSubmit', 'form:not([method~="GET"])', onFormSubmit);
    }
  };

  function triggerFormUpdated(element) {
    $(element).trigger('formUpdated');
  }

  function fieldsList(form) {
    var $fieldList = $(form).find('[name]').map(function (index, element) {
      return element.getAttribute('id');
    });

    return $.makeArray($fieldList);
  }

  Drupal.behaviors.formUpdated = {
    attach: function attach(context) {
      var $context = $(context);
      var contextIsForm = $context.is('form');
      var $forms = (contextIsForm ? $context : $context.find('form')).once('form-updated');
      var formFields = void 0;

      if ($forms.length) {
        $.makeArray($forms).forEach(function (form) {
          var events = 'change.formUpdated input.formUpdated ';
          var eventHandler = debounce(function (event) {
            triggerFormUpdated(event.target);
          }, 300);
          formFields = fieldsList(form).join(',');

          form.setAttribute('data-drupal-form-fields', formFields);
          $(form).on(events, eventHandler);
        });
      }

      if (contextIsForm) {
        formFields = fieldsList(context).join(',');

        var currentFields = $(context).attr('data-drupal-form-fields');

        if (formFields !== currentFields) {
          triggerFormUpdated(context);
        }
      }
    },
    detach: function detach(context, settings, trigger) {
      var $context = $(context);
      var contextIsForm = $context.is('form');
      if (trigger === 'unload') {
        var $forms = (contextIsForm ? $context : $context.find('form')).removeOnce('form-updated');
        if ($forms.length) {
          $.makeArray($forms).forEach(function (form) {
            form.removeAttribute('data-drupal-form-fields');
            $(form).off('.formUpdated');
          });
        }
      }
    }
  };

  Drupal.behaviors.fillUserInfoFromBrowser = {
    attach: function attach(context, settings) {
      var userInfo = ['name', 'mail', 'homepage'];
      var $forms = $('[data-user-info-from-browser]').once('user-info-from-browser');
      if ($forms.length) {
        userInfo.map(function (info) {
          var $element = $forms.find('[name=' + info + ']');
          var browserData = localStorage.getItem('Drupal.visitor.' + info);
          var emptyOrDefault = $element.val() === '' || $element.attr('data-drupal-default-value') === $element.val();
          if ($element.length && emptyOrDefault && browserData) {
            $element.val(browserData);
          }
        });
      }
      $forms.on('submit', function () {
        userInfo.map(function (info) {
          var $element = $forms.find('[name=' + info + ']');
          if ($element.length) {
            localStorage.setItem('Drupal.visitor.' + info, $element.val());
          }
        });
      });
    }
  };

  var handleFragmentLinkClickOrHashChange = function handleFragmentLinkClickOrHashChange(e) {
    var url = void 0;
    if (e.type === 'click') {
      url = e.currentTarget.location ? e.currentTarget.location : e.currentTarget;
    } else {
      url = location;
    }
    var hash = url.hash.substr(1);
    if (hash) {
      var $target = $('#' + hash);
      $('body').trigger('formFragmentLinkClickOrHashChange', [$target]);

      setTimeout(function () {
        return $target.trigger('focus');
      }, 300);
    }
  };

  var debouncedHandleFragmentLinkClickOrHashChange = debounce(handleFragmentLinkClickOrHashChange, 300, true);

  $(window).on('hashchange.form-fragment', debouncedHandleFragmentLinkClickOrHashChange);

  $(document).on('click.form-fragment', 'a[href*="#"]', debouncedHandleFragmentLinkClickOrHashChange);
})(jQuery, Drupal, Drupal.debounce);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.machineName = {
    attach: function attach(context, settings) {
      var self = this;
      var $context = $(context);
      var timeout = null;
      var xhr = null;

      function clickEditHandler(e) {
        var data = e.data;
        data.$wrapper.removeClass('visually-hidden');
        data.$target.trigger('focus');
        data.$suffix.hide();
        data.$source.off('.machineName');
      }

      function machineNameHandler(e) {
        var data = e.data;
        var options = data.options;
        var baseValue = $(e.target).val();

        var rx = new RegExp(options.replace_pattern, 'g');
        var expected = baseValue.toLowerCase().replace(rx, options.replace).substr(0, options.maxlength);

        if (xhr && xhr.readystate !== 4) {
          xhr.abort();
          xhr = null;
        }

        if (timeout) {
          clearTimeout(timeout);
          timeout = null;
        }
        if (baseValue.toLowerCase() !== expected) {
          timeout = setTimeout(function () {
            xhr = self.transliterate(baseValue, options).done(function (machine) {
              self.showMachineName(machine.substr(0, options.maxlength), data);
            });
          }, 300);
        } else {
          self.showMachineName(expected, data);
        }
      }

      Object.keys(settings.machineName).forEach(function (source_id) {
        var machine = '';
        var eventData = void 0;
        var options = settings.machineName[source_id];

        var $source = $context.find(source_id).addClass('machine-name-source').once('machine-name');
        var $target = $context.find(options.target).addClass('machine-name-target');
        var $suffix = $context.find(options.suffix);
        var $wrapper = $target.closest('.js-form-item');

        if (!$source.length || !$target.length || !$suffix.length || !$wrapper.length) {
          return;
        }

        if ($target.hasClass('error')) {
          return;
        }

        options.maxlength = $target.attr('maxlength');

        $wrapper.addClass('visually-hidden');

        if ($target.is(':disabled') || $target.val() !== '') {
          machine = $target.val();
        } else if ($source.val() !== '') {
          machine = self.transliterate($source.val(), options);
        }

        var $preview = $('<span class="machine-name-value">' + options.field_prefix + Drupal.checkPlain(machine) + options.field_suffix + '</span>');
        $suffix.empty();
        if (options.label) {
          $suffix.append('<span class="machine-name-label">' + options.label + ': </span>');
        }
        $suffix.append($preview);

        if ($target.is(':disabled')) {
          return;
        }

        eventData = {
          $source: $source,
          $target: $target,
          $suffix: $suffix,
          $wrapper: $wrapper,
          $preview: $preview,
          options: options
        };

        var $link = $('<span class="admin-link"><button type="button" class="link">' + Drupal.t('Edit') + '</button></span>').on('click', eventData, clickEditHandler);
        $suffix.append($link);

        if ($target.val() === '') {
          $source.on('formUpdated.machineName', eventData, machineNameHandler).trigger('formUpdated.machineName');
        }

        $target.on('invalid', eventData, clickEditHandler);
      });
    },
    showMachineName: function showMachineName(machine, data) {
      var settings = data.options;

      if (machine !== '') {
        if (machine !== settings.replace) {
          data.$target.val(machine);
          data.$preview.html(settings.field_prefix + Drupal.checkPlain(machine) + settings.field_suffix);
        }
        data.$suffix.show();
      } else {
        data.$suffix.hide();
        data.$target.val(machine);
        data.$preview.empty();
      }
    },
    transliterate: function transliterate(source, settings) {
      return $.get(Drupal.url('machine_name/transliterate'), {
        text: source,
        langcode: drupalSettings.langcode,
        replace_pattern: settings.replace_pattern,
        replace_token: settings.replace_token,
        replace: settings.replace,
        lowercase: true
      });
    }
  };
})(jQuery, Drupal, drupalSettings);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal) {
  Drupal.behaviors.detailsAria = {
    attach: function attach() {
      $('body').once('detailsAria').on('click.detailsAria', 'summary', function (event) {
        var $summary = $(event.currentTarget);
        var open = $(event.currentTarget.parentNode).attr('open') === 'open' ? 'false' : 'true';

        $summary.attr({
          'aria-expanded': open,
          'aria-pressed': open
        });
      });
    }
  };
})(jQuery, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Modernizr, Drupal) {
  function CollapsibleDetails(node) {
    this.$node = $(node);
    this.$node.data('details', this);

    var anchor = location.hash && location.hash !== '#' ? ', ' + location.hash : '';
    if (this.$node.find('.error' + anchor).length) {
      this.$node.attr('open', true);
    }

    this.setupSummary();

    this.setupLegend();
  }

  $.extend(CollapsibleDetails, {
    instances: []
  });

  $.extend(CollapsibleDetails.prototype, {
    setupSummary: function setupSummary() {
      this.$summary = $('<span class="summary"></span>');
      this.$node.on('summaryUpdated', $.proxy(this.onSummaryUpdated, this)).trigger('summaryUpdated');
    },
    setupLegend: function setupLegend() {
      var $legend = this.$node.find('> summary');

      $('<span class="details-summary-prefix visually-hidden"></span>').append(this.$node.attr('open') ? Drupal.t('Hide') : Drupal.t('Show')).prependTo($legend).after(document.createTextNode(' '));

      $('<a class="details-title"></a>').attr('href', '#' + this.$node.attr('id')).prepend($legend.contents()).appendTo($legend);

      $legend.append(this.$summary).on('click', $.proxy(this.onLegendClick, this));
    },
    onLegendClick: function onLegendClick(e) {
      this.toggle();
      e.preventDefault();
    },
    onSummaryUpdated: function onSummaryUpdated() {
      var text = $.trim(this.$node.drupalGetSummary());
      this.$summary.html(text ? ' (' + text + ')' : '');
    },
    toggle: function toggle() {
      var _this = this;

      var isOpen = !!this.$node.attr('open');
      var $summaryPrefix = this.$node.find('> summary span.details-summary-prefix');
      if (isOpen) {
        $summaryPrefix.html(Drupal.t('Show'));
      } else {
        $summaryPrefix.html(Drupal.t('Hide'));
      }

      setTimeout(function () {
        _this.$node.attr('open', !isOpen);
      }, 0);
    }
  });

  Drupal.behaviors.collapse = {
    attach: function attach(context) {
      if (Modernizr.details) {
        return;
      }
      var $collapsibleDetails = $(context).find('details').once('collapse').addClass('collapse-processed');
      if ($collapsibleDetails.length) {
        for (var i = 0; i < $collapsibleDetails.length; i++) {
          CollapsibleDetails.instances.push(new CollapsibleDetails($collapsibleDetails[i]));
        }
      }
    }
  };

  var handleFragmentLinkClickOrHashChange = function handleFragmentLinkClickOrHashChange(e, $target) {
    $target.parents('details').not('[open]').find('> summary').trigger('click');
  };

  $('body').on('formFragmentLinkClickOrHashChange.details', handleFragmentLinkClickOrHashChange);

  Drupal.CollapsibleDetails = CollapsibleDetails;
})(jQuery, Modernizr, Drupal);;
