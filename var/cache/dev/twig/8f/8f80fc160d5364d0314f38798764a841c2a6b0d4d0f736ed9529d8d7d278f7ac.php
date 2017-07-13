<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ff745af4c9785908df5f50f3220a611a7a8150c8acb4b2d4fa58002236a15742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_2ab196e76594c7186777d35338b119ec4bf75f86685f04d7b508f39e16c77412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab196e76594c7186777d35338b119ec4bf75f86685f04d7b508f39e16c77412->enter($__internal_2ab196e76594c7186777d35338b119ec4bf75f86685f04d7b508f39e16c77412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_eb343c8f0506176bd347b63b1fa2429bbb4e7dd4256dc2679d03b5e3f6e78b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb343c8f0506176bd347b63b1fa2429bbb4e7dd4256dc2679d03b5e3f6e78b98->enter($__internal_eb343c8f0506176bd347b63b1fa2429bbb4e7dd4256dc2679d03b5e3f6e78b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ab196e76594c7186777d35338b119ec4bf75f86685f04d7b508f39e16c77412->leave($__internal_2ab196e76594c7186777d35338b119ec4bf75f86685f04d7b508f39e16c77412_prof);

        
        $__internal_eb343c8f0506176bd347b63b1fa2429bbb4e7dd4256dc2679d03b5e3f6e78b98->leave($__internal_eb343c8f0506176bd347b63b1fa2429bbb4e7dd4256dc2679d03b5e3f6e78b98_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_76468545c86c1f51aee32f63684028eb7cd14658148e202e06027af0827950ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76468545c86c1f51aee32f63684028eb7cd14658148e202e06027af0827950ed->enter($__internal_76468545c86c1f51aee32f63684028eb7cd14658148e202e06027af0827950ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ce54cafd86a086383ad1359d03f7bc08374f5b950d83ec1fdf98b523f133e6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce54cafd86a086383ad1359d03f7bc08374f5b950d83ec1fdf98b523f133e6be->enter($__internal_ce54cafd86a086383ad1359d03f7bc08374f5b950d83ec1fdf98b523f133e6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ce54cafd86a086383ad1359d03f7bc08374f5b950d83ec1fdf98b523f133e6be->leave($__internal_ce54cafd86a086383ad1359d03f7bc08374f5b950d83ec1fdf98b523f133e6be_prof);

        
        $__internal_76468545c86c1f51aee32f63684028eb7cd14658148e202e06027af0827950ed->leave($__internal_76468545c86c1f51aee32f63684028eb7cd14658148e202e06027af0827950ed_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_52127be4fe9776a9493706a064154c8c5dce38e10e996064f97a6357e00e0f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52127be4fe9776a9493706a064154c8c5dce38e10e996064f97a6357e00e0f5a->enter($__internal_52127be4fe9776a9493706a064154c8c5dce38e10e996064f97a6357e00e0f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe214ba3fd2c55552a4877747787ebb8a0469e89991c396bcb472c9a1d73e1f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe214ba3fd2c55552a4877747787ebb8a0469e89991c396bcb472c9a1d73e1f4->enter($__internal_fe214ba3fd2c55552a4877747787ebb8a0469e89991c396bcb472c9a1d73e1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fe214ba3fd2c55552a4877747787ebb8a0469e89991c396bcb472c9a1d73e1f4->leave($__internal_fe214ba3fd2c55552a4877747787ebb8a0469e89991c396bcb472c9a1d73e1f4_prof);

        
        $__internal_52127be4fe9776a9493706a064154c8c5dce38e10e996064f97a6357e00e0f5a->leave($__internal_52127be4fe9776a9493706a064154c8c5dce38e10e996064f97a6357e00e0f5a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94c53caf626f5f2b2149efa255e1a3f8c633081c7fdb5df30f59a4039cddec5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c53caf626f5f2b2149efa255e1a3f8c633081c7fdb5df30f59a4039cddec5e->enter($__internal_94c53caf626f5f2b2149efa255e1a3f8c633081c7fdb5df30f59a4039cddec5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_451cc8543c25ad7cbd356cdd8aed62781ffb9d06aee90b049d90de6e682ced27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451cc8543c25ad7cbd356cdd8aed62781ffb9d06aee90b049d90de6e682ced27->enter($__internal_451cc8543c25ad7cbd356cdd8aed62781ffb9d06aee90b049d90de6e682ced27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_451cc8543c25ad7cbd356cdd8aed62781ffb9d06aee90b049d90de6e682ced27->leave($__internal_451cc8543c25ad7cbd356cdd8aed62781ffb9d06aee90b049d90de6e682ced27_prof);

        
        $__internal_94c53caf626f5f2b2149efa255e1a3f8c633081c7fdb5df30f59a4039cddec5e->leave($__internal_94c53caf626f5f2b2149efa255e1a3f8c633081c7fdb5df30f59a4039cddec5e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/Joel/Desktop/Sites/Dnyer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
