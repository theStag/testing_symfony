<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_ecc205a91b283ecf01f5a0592453be8784455d4418d8409c8736d431bc3025de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2df2ddbe0164e338089a5bc11b1f73dca0fd1ea3f4f92584028e0097f673363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2df2ddbe0164e338089a5bc11b1f73dca0fd1ea3f4f92584028e0097f673363->enter($__internal_f2df2ddbe0164e338089a5bc11b1f73dca0fd1ea3f4f92584028e0097f673363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        $__internal_336836f97518f5675dfb446f18aedb766cd41b4e7fcff5f3b5277326bb23c7ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336836f97518f5675dfb446f18aedb766cd41b4e7fcff5f3b5277326bb23c7ec->enter($__internal_336836f97518f5675dfb446f18aedb766cd41b4e7fcff5f3b5277326bb23c7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2df2ddbe0164e338089a5bc11b1f73dca0fd1ea3f4f92584028e0097f673363->leave($__internal_f2df2ddbe0164e338089a5bc11b1f73dca0fd1ea3f4f92584028e0097f673363_prof);

        
        $__internal_336836f97518f5675dfb446f18aedb766cd41b4e7fcff5f3b5277326bb23c7ec->leave($__internal_336836f97518f5675dfb446f18aedb766cd41b4e7fcff5f3b5277326bb23c7ec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_143ba0cfbbe944da98fb615bb40cc7abb4fea76589f10bbb2a0929ed99795045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_143ba0cfbbe944da98fb615bb40cc7abb4fea76589f10bbb2a0929ed99795045->enter($__internal_143ba0cfbbe944da98fb615bb40cc7abb4fea76589f10bbb2a0929ed99795045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9a07dfb91ddc8dcd4d600707e58cd1335690a0d080dfacae4f41c9a399a47659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a07dfb91ddc8dcd4d600707e58cd1335690a0d080dfacae4f41c9a399a47659->enter($__internal_9a07dfb91ddc8dcd4d600707e58cd1335690a0d080dfacae4f41c9a399a47659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
    <strong>Events</strong>
</span>
";
        
        $__internal_9a07dfb91ddc8dcd4d600707e58cd1335690a0d080dfacae4f41c9a399a47659->leave($__internal_9a07dfb91ddc8dcd4d600707e58cd1335690a0d080dfacae4f41c9a399a47659_prof);

        
        $__internal_143ba0cfbbe944da98fb615bb40cc7abb4fea76589f10bbb2a0929ed99795045->leave($__internal_143ba0cfbbe944da98fb615bb40cc7abb4fea76589f10bbb2a0929ed99795045_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9c8b7623df4dec8c88367d61bd5cc2dfe86b6b86b994973f5d7430b0b94493d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8b7623df4dec8c88367d61bd5cc2dfe86b6b86b994973f5d7430b0b94493d9->enter($__internal_9c8b7623df4dec8c88367d61bd5cc2dfe86b6b86b994973f5d7430b0b94493d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db859ebc0bb595b82f3ee8cf37f4f917ab13172a7a4952ad403b1feddc9f42cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db859ebc0bb595b82f3ee8cf37f4f917ab13172a7a4952ad403b1feddc9f42cd->enter($__internal_db859ebc0bb595b82f3ee8cf37f4f917ab13172a7a4952ad403b1feddc9f42cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    <h2>Event Dispatcher</h2>

    ";
        // line 15
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array()))) {
            // line 16
            echo "        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 20
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">";
            // line 22
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 25
            echo $context["helper"]->getrender_table($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners", array()));
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 32
            if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array()))) {
                // line 33
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 44
                echo "                        ";
                echo $context["helper"]->getrender_table($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners", array()));
                echo "
                    ";
            }
            // line 46
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_db859ebc0bb595b82f3ee8cf37f4f917ab13172a7a4952ad403b1feddc9f42cd->leave($__internal_db859ebc0bb595b82f3ee8cf37f4f917ab13172a7a4952ad403b1feddc9f42cd_prof);

        
        $__internal_9c8b7623df4dec8c88367d61bd5cc2dfe86b6b86b994973f5d7430b0b94493d9->leave($__internal_9c8b7623df4dec8c88367d61bd5cc2dfe86b6b86b994973f5d7430b0b94493d9_prof);

    }

    // line 52
    public function getrender_table($__listeners__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9799b293af36ffa03892087e07266a4ac6fc022c0cd1d0f55c6969c968d9cf1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_9799b293af36ffa03892087e07266a4ac6fc022c0cd1d0f55c6969c968d9cf1f->enter($__internal_9799b293af36ffa03892087e07266a4ac6fc022c0cd1d0f55c6969c968d9cf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_be18dfee1b0d1d4ad08a98251476271eb857ea787a81f06d53d8700bab98bc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_be18dfee1b0d1d4ad08a98251476271eb857ea787a81f06d53d8700bab98bc3e->enter($__internal_be18dfee1b0d1d4ad08a98251476271eb857ea787a81f06d53d8700bab98bc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 53
            echo "    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        ";
            // line 61
            $context["previous_event"] = $this->getAttribute(twig_first($this->env, (isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners"))), "event", array());
            // line 62
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 63
                echo "            ";
                if (($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($context["listener"], "event", array()) != (isset($context["previous_event"]) ? $context["previous_event"] : $this->getContext($context, "previous_event"))))) {
                    // line 64
                    echo "                ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 65
                        echo "                    </tbody>
                ";
                    }
                    // line 67
                    echo "
                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute($context["listener"], "event", array()), "html", null, true);
                    echo "</th>
                    </tr>

                ";
                    // line 73
                    $context["previous_event"] = $this->getAttribute($context["listener"], "event", array());
                    // line 74
                    echo "            ";
                }
                // line 75
                echo "
            <tr>
                <td class=\"text-right\">";
                // line 77
                echo twig_escape_filter($this->env, (($this->getAttribute($context["listener"], "priority", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["listener"], "priority", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 78
                echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($context["listener"], "data", array())));
                echo "</td>
            </tr>

            ";
                // line 81
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 82
                    echo "                </tbody>
            ";
                }
                // line 84
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "    </table>
";
            
            $__internal_be18dfee1b0d1d4ad08a98251476271eb857ea787a81f06d53d8700bab98bc3e->leave($__internal_be18dfee1b0d1d4ad08a98251476271eb857ea787a81f06d53d8700bab98bc3e_prof);

            
            $__internal_9799b293af36ffa03892087e07266a4ac6fc022c0cd1d0f55c6969c968d9cf1f->leave($__internal_9799b293af36ffa03892087e07266a4ac6fc022c0cd1d0f55c6969c968d9cf1f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 85,  243 => 84,  239 => 82,  237 => 81,  231 => 78,  227 => 77,  223 => 75,  220 => 74,  218 => 73,  212 => 70,  207 => 67,  203 => 65,  200 => 64,  197 => 63,  179 => 62,  177 => 61,  167 => 53,  149 => 52,  135 => 46,  129 => 44,  116 => 33,  114 => 32,  109 => 30,  101 => 25,  95 => 22,  91 => 20,  85 => 16,  83 => 15,  79 => 13,  70 => 12,  56 => 7,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Event Dispatcher</h2>

    {% if collector.calledlisteners is empty %}
        <div class=\"empty\">
            <p>No events have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Listeners <span class=\"badge\">{{ collector.calledlisteners|length }}</span></h3>

                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledlisteners) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Listeners <span class=\"badge\">{{ collector.notcalledlisteners|length }}</span></h3>
                <div class=\"tab-content\">
                    {% if collector.notcalledlisteners is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled listeners</strong>.
                            </p>
                            <p>
                                All listeners were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notcalledlisteners) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(listeners) %}
    <table>
        <thead>
            <tr>
                <th class=\"text-right\">Priority</th>
                <th>Listener</th>
            </tr>
        </thead>

        {% set previous_event = (listeners|first).event %}
        {% for listener in listeners %}
            {% if loop.first or listener.event != previous_event %}
                {% if not loop.first %}
                    </tbody>
                {% endif %}

                <tbody>
                    <tr>
                        <th colspan=\"2\" class=\"colored font-normal\">{{ listener.event }}</th>
                    </tr>

                {% set previous_event = listener.event %}
            {% endif %}

            <tr>
                <td class=\"text-right\">{{ listener.priority|default('-') }}</td>
                <td class=\"font-normal\">{{ profiler_dump(listener.data) }}</td>
            </tr>

            {% if loop.last %}
                </tbody>
            {% endif %}
        {% endfor %}
    </table>
{% endmacro %}
", "@WebProfiler/Collector/events.html.twig", "/var/www/erstesymf/test2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/events.html.twig");
    }
}
