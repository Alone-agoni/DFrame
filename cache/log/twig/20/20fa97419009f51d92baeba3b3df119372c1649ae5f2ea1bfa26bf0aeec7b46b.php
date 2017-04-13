<?php

/* Default/index.html */
class __TwigTemplate_8002fe3da124bd208fd62b960020f9043299ad46b04b9109a4fc6a52bcee2263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta charset=\"utf-8\">
<title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
</head>
<body>
    <h1><h2>Welcome DFrame!</h2></h1>
    <p>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</p>
\t
\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["vo"]) {
            // line 12
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vo"], "title", array()), "html", null, true);
            echo "</p>
\t\t<div>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["vo"], "content", array()), "html", null, true);
            echo "</div>\t\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Default/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  46 => 13,  41 => 12,  37 => 11,  32 => 9,  25 => 5,  19 => 1,);
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
<meta charset=\"utf-8\">
<title>{{ title }}</title>
</head>
<body>
    <h1><h2>Welcome DFrame!</h2></h1>
    <p>{{ name }}</p>
\t
\t{% for vo in article %}
\t\t<p>{{ vo.title }}</p>
\t\t<div>{{ vo.content }}</div>\t\t
\t{% endfor %}
</body>
</html>
", "Default/index.html", "/home/wei/share/DFrame/apps/frontend/view/Default/index.html");
    }
}
