<?php

/* base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7f161c8b036c048314ffdb81a5674a4e549084c41504bbb445266a2c8e06991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f161c8b036c048314ffdb81a5674a4e549084c41504bbb445266a2c8e06991->enter($__internal_b7f161c8b036c048314ffdb81a5674a4e549084c41504bbb445266a2c8e06991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6401ae41cb5c39dea5bba1ad66b1c171646334626a8d68bf8c722c72d6ab259f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6401ae41cb5c39dea5bba1ad66b1c171646334626a8d68bf8c722c72d6ab259f->enter($__internal_6401ae41cb5c39dea5bba1ad66b1c171646334626a8d68bf8c722c72d6ab259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b7f161c8b036c048314ffdb81a5674a4e549084c41504bbb445266a2c8e06991->leave($__internal_b7f161c8b036c048314ffdb81a5674a4e549084c41504bbb445266a2c8e06991_prof);

        
        $__internal_6401ae41cb5c39dea5bba1ad66b1c171646334626a8d68bf8c722c72d6ab259f->leave($__internal_6401ae41cb5c39dea5bba1ad66b1c171646334626a8d68bf8c722c72d6ab259f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_abf064ddba4492711a40f7dabaad12cea487fac5a8ae54fb2c7eee05b8d6d331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf064ddba4492711a40f7dabaad12cea487fac5a8ae54fb2c7eee05b8d6d331->enter($__internal_abf064ddba4492711a40f7dabaad12cea487fac5a8ae54fb2c7eee05b8d6d331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1bf78871587ed368e6da4b17dfde510036d82f589d149799fd83eec50d1ce8ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf78871587ed368e6da4b17dfde510036d82f589d149799fd83eec50d1ce8ff->enter($__internal_1bf78871587ed368e6da4b17dfde510036d82f589d149799fd83eec50d1ce8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1bf78871587ed368e6da4b17dfde510036d82f589d149799fd83eec50d1ce8ff->leave($__internal_1bf78871587ed368e6da4b17dfde510036d82f589d149799fd83eec50d1ce8ff_prof);

        
        $__internal_abf064ddba4492711a40f7dabaad12cea487fac5a8ae54fb2c7eee05b8d6d331->leave($__internal_abf064ddba4492711a40f7dabaad12cea487fac5a8ae54fb2c7eee05b8d6d331_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2053ca7635fd434642c73e0b95e3a62709becb8e7628476f57f6d9ac237c723e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2053ca7635fd434642c73e0b95e3a62709becb8e7628476f57f6d9ac237c723e->enter($__internal_2053ca7635fd434642c73e0b95e3a62709becb8e7628476f57f6d9ac237c723e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f816a3f777b496e5788ac977fffc3110e20ca188f8b54cd073bedc2017735c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f816a3f777b496e5788ac977fffc3110e20ca188f8b54cd073bedc2017735c22->enter($__internal_f816a3f777b496e5788ac977fffc3110e20ca188f8b54cd073bedc2017735c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f816a3f777b496e5788ac977fffc3110e20ca188f8b54cd073bedc2017735c22->leave($__internal_f816a3f777b496e5788ac977fffc3110e20ca188f8b54cd073bedc2017735c22_prof);

        
        $__internal_2053ca7635fd434642c73e0b95e3a62709becb8e7628476f57f6d9ac237c723e->leave($__internal_2053ca7635fd434642c73e0b95e3a62709becb8e7628476f57f6d9ac237c723e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_57174d44be7056755bf858d8366b9d39936a093671594401e822ef93e2db9c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57174d44be7056755bf858d8366b9d39936a093671594401e822ef93e2db9c4c->enter($__internal_57174d44be7056755bf858d8366b9d39936a093671594401e822ef93e2db9c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce3b7159bb1dc958f2d6aabfbe514603b374fedc5b47dc4174f2a65213f8ddec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3b7159bb1dc958f2d6aabfbe514603b374fedc5b47dc4174f2a65213f8ddec->enter($__internal_ce3b7159bb1dc958f2d6aabfbe514603b374fedc5b47dc4174f2a65213f8ddec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce3b7159bb1dc958f2d6aabfbe514603b374fedc5b47dc4174f2a65213f8ddec->leave($__internal_ce3b7159bb1dc958f2d6aabfbe514603b374fedc5b47dc4174f2a65213f8ddec_prof);

        
        $__internal_57174d44be7056755bf858d8366b9d39936a093671594401e822ef93e2db9c4c->leave($__internal_57174d44be7056755bf858d8366b9d39936a093671594401e822ef93e2db9c4c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6f4cf1f0aa98388282afb729ed19a005823c1d75554cc659c1cfaa872c21cefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4cf1f0aa98388282afb729ed19a005823c1d75554cc659c1cfaa872c21cefe->enter($__internal_6f4cf1f0aa98388282afb729ed19a005823c1d75554cc659c1cfaa872c21cefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9779d918d3b192a9787ff1ed831ea71efbda107425f874dbebae21b72115eeeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9779d918d3b192a9787ff1ed831ea71efbda107425f874dbebae21b72115eeeb->enter($__internal_9779d918d3b192a9787ff1ed831ea71efbda107425f874dbebae21b72115eeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9779d918d3b192a9787ff1ed831ea71efbda107425f874dbebae21b72115eeeb->leave($__internal_9779d918d3b192a9787ff1ed831ea71efbda107425f874dbebae21b72115eeeb_prof);

        
        $__internal_6f4cf1f0aa98388282afb729ed19a005823c1d75554cc659c1cfaa872c21cefe->leave($__internal_6f4cf1f0aa98388282afb729ed19a005823c1d75554cc659c1cfaa872c21cefe_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/Joel/Desktop/Sites/Dnyer/app/Resources/views/base.html.twig");
    }
}
