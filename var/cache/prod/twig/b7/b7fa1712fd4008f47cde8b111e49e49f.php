<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index/index.html.twig */
class __TwigTemplate_bd5a98fb62eb899af462b8d75da3a3a5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 5
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
";
        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "<h1 class=\"tituloApp\"><b>¡Bienvenido a DNDpedia!</b></h1>
<div class=\"indices\">
    <h1>Accesos Rápidos</h1>
    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_clases");
        yield "\">
        <span><i class=\"icofont-shield\"></i> Clases</span> 
    </a>
    
    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_subclases");
        yield "\">
        <span><i class=\"icofont-duotone icofont-shield\"></i> Subclases</span> 
    </a>
    
    <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_razas");
        yield "\">
        <span><i class=\"icofont-users-alt-3\"></i> Razas</span> 
    </a>
    
     <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_subrazas");
        yield "\">
        <span><i class=\"icofont-user\"></i> Subrazas</span> 
    </a>
    
    <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_trasfondos");
        yield "\">
        <span><i class=\"icofont-paper\"></i> Trasfondos</span> 
    </a>
    
     <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_dotes");
        yield "\">
        <span><i class=\"icofont-listine-dots\"></i> Dotes</span> 
    </a>
    
     <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resultados_hechizos");
        yield "\">
        <span><i class=\"icofont-duotone icofont-wand\"></i> Hechizos</span> 
    </a>
    
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  113 => 35,  106 => 31,  99 => 27,  92 => 23,  85 => 19,  78 => 15,  71 => 11,  66 => 8,  62 => 7,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/index.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\index\\index.html.twig");
    }
}
