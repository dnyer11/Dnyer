<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_8cab1adf22a1703069fb3819d34e2566af218e3a1ab7380a3114668dc9cc4e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cab1adf22a1703069fb3819d34e2566af218e3a1ab7380a3114668dc9cc4e79->enter($__internal_8cab1adf22a1703069fb3819d34e2566af218e3a1ab7380a3114668dc9cc4e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d376ab98f8ac5fa7c1e2cf46dbf6a7402dd0d7ac5fc2b23c79ce8affbdc4143e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d376ab98f8ac5fa7c1e2cf46dbf6a7402dd0d7ac5fc2b23c79ce8affbdc4143e->enter($__internal_d376ab98f8ac5fa7c1e2cf46dbf6a7402dd0d7ac5fc2b23c79ce8affbdc4143e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cab1adf22a1703069fb3819d34e2566af218e3a1ab7380a3114668dc9cc4e79->leave($__internal_8cab1adf22a1703069fb3819d34e2566af218e3a1ab7380a3114668dc9cc4e79_prof);

        
        $__internal_d376ab98f8ac5fa7c1e2cf46dbf6a7402dd0d7ac5fc2b23c79ce8affbdc4143e->leave($__internal_d376ab98f8ac5fa7c1e2cf46dbf6a7402dd0d7ac5fc2b23c79ce8affbdc4143e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39fec0283d1d7f38c04bdb1750ed7f12e28164165db36024745f85828dab9e59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fec0283d1d7f38c04bdb1750ed7f12e28164165db36024745f85828dab9e59->enter($__internal_39fec0283d1d7f38c04bdb1750ed7f12e28164165db36024745f85828dab9e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_328d03af2905aa41faf8078c1c738295012e66dd0dc6b2848f45bb9dff379227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328d03af2905aa41faf8078c1c738295012e66dd0dc6b2848f45bb9dff379227->enter($__internal_328d03af2905aa41faf8078c1c738295012e66dd0dc6b2848f45bb9dff379227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_328d03af2905aa41faf8078c1c738295012e66dd0dc6b2848f45bb9dff379227->leave($__internal_328d03af2905aa41faf8078c1c738295012e66dd0dc6b2848f45bb9dff379227_prof);

        
        $__internal_39fec0283d1d7f38c04bdb1750ed7f12e28164165db36024745f85828dab9e59->leave($__internal_39fec0283d1d7f38c04bdb1750ed7f12e28164165db36024745f85828dab9e59_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_653cedf748a8690d309859e352c77eed0dac4a22b4bc7e3a6079f020022768be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_653cedf748a8690d309859e352c77eed0dac4a22b4bc7e3a6079f020022768be->enter($__internal_653cedf748a8690d309859e352c77eed0dac4a22b4bc7e3a6079f020022768be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_81967a81d410d986c323f3ea084508139358650ebe7400c38e822881bbd2accc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81967a81d410d986c323f3ea084508139358650ebe7400c38e822881bbd2accc->enter($__internal_81967a81d410d986c323f3ea084508139358650ebe7400c38e822881bbd2accc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_81967a81d410d986c323f3ea084508139358650ebe7400c38e822881bbd2accc->leave($__internal_81967a81d410d986c323f3ea084508139358650ebe7400c38e822881bbd2accc_prof);

        
        $__internal_653cedf748a8690d309859e352c77eed0dac4a22b4bc7e3a6079f020022768be->leave($__internal_653cedf748a8690d309859e352c77eed0dac4a22b4bc7e3a6079f020022768be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63ee7c35e582769b9efc2bfff6d569ff3cde828195faeeb9715f7a7b52ddd9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ee7c35e582769b9efc2bfff6d569ff3cde828195faeeb9715f7a7b52ddd9de->enter($__internal_63ee7c35e582769b9efc2bfff6d569ff3cde828195faeeb9715f7a7b52ddd9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20fe7e4649069ecc9cdaf7fdf0164165ea1dc3944fb88465fa085d02fb068d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fe7e4649069ecc9cdaf7fdf0164165ea1dc3944fb88465fa085d02fb068d04->enter($__internal_20fe7e4649069ecc9cdaf7fdf0164165ea1dc3944fb88465fa085d02fb068d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_20fe7e4649069ecc9cdaf7fdf0164165ea1dc3944fb88465fa085d02fb068d04->leave($__internal_20fe7e4649069ecc9cdaf7fdf0164165ea1dc3944fb88465fa085d02fb068d04_prof);

        
        $__internal_63ee7c35e582769b9efc2bfff6d569ff3cde828195faeeb9715f7a7b52ddd9de->leave($__internal_63ee7c35e582769b9efc2bfff6d569ff3cde828195faeeb9715f7a7b52ddd9de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Joel/Desktop/Sites/Dnyer/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
