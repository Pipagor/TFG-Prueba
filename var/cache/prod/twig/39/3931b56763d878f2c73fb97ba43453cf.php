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

/* solicitudes/razas.html.twig */
class __TwigTemplate_e3dc88b88f4c5415c755ac751ad53281 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "solicitudes/razas.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "
<div class=\"formulario center-h center-v\">
<div class=\"formulario2 \">
    <h1 class=\"titulo\">Solicitudes de Razas</h1>
 ";
        // line 8
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield " 
    <div class=\"row\">
        <div class=\"C\">
            ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Nombre", [], "any", false, false, false, 11), 'row');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion", [], "any", false, false, false, 15), 'row');
        yield "
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Fuerza", [], "any", false, false, false, 20), 'row');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Destreza", [], "any", false, false, false, 24), 'row');
        yield "
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Constitucion", [], "any", false, false, false, 29), 'row');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Inteligencia", [], "any", false, false, false, 33), 'row');
        yield "
        </div>
    </div>
     <div class=\"row\">
        <div class=\"C\">
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Sabiduria", [], "any", false, false, false, 38), 'row');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Carisma", [], "any", false, false, false, 42), 'row');
        yield "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Velocidad", [], "any", false, false, false, 47), 'row');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "AtaqueDesarmado", [], "any", false, false, false, 51), 'row');
        yield "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
           ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "img", [], "any", false, false, false, 56), 'row');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Autor", [], "any", false, false, false, 60), 'row');
        yield "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
        </div>
        <span class=\"E\"></span>
        <div class=\"A\"><br>
            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Enviar", [], "any", false, false, false, 68), 'row');
        yield "
        </div>
    </div>
 ";
        // line 71
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
    
    </div>
 </div>

 ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "solicitudes/razas.html.twig";
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
        return array (  162 => 71,  156 => 68,  145 => 60,  138 => 56,  130 => 51,  123 => 47,  115 => 42,  108 => 38,  100 => 33,  93 => 29,  85 => 24,  78 => 20,  70 => 15,  63 => 11,  57 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "solicitudes/razas.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\solicitudes\\razas.html.twig");
    }
}
