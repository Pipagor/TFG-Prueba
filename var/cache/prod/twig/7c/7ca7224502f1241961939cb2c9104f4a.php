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

/* solicitudes/habilidades_subclase.html.twig */
class __TwigTemplate_c9edc3bb16f993af3d82096e89badd18 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "solicitudes/habilidades_subclase.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Hello BuscadorController!";
        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"formulario center-h center-v\">
<div class=\"formulario2 \">
    <h1 class=\"titulo\">Habilidades de subclase</h1>
    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield " 
    <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Nombre", [], "any", false, false, false, 13), 'widget');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion", [], "any", false, false, false, 18), 'widget');
        yield "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel", [], "any", false, false, false, 23), 'widget');
        yield "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Nombre2", [], "any", false, false, false, 29), 'widget');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion2", [], "any", false, false, false, 34), 'widget');
        yield "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel2", [], "any", false, false, false, 39), 'widget');
        yield "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Nombre3", [], "any", false, false, false, 45), 'widget');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion3", [], "any", false, false, false, 50), 'widget');
        yield "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel3", [], "any", false, false, false, 55), 'widget');
        yield "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Nombre4", [], "any", false, false, false, 61), 'widget');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion4", [], "any", false, false, false, 66), 'widget');
        yield "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel4", [], "any", false, false, false, 71), 'widget');
        yield "
        </div>
    </div>
     <div class=\"rowHabilidades\">
        <div class=\"C\">
            <span>Nombre</span>
            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Nombre5", [], "any", false, false, false, 77), 'widget');
        yield "
        </div>
        <span class=\"E\"></span>
        <div class=\"A\">
            <span>Descripcion</span>
            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Descripcion5", [], "any", false, false, false, 82), 'widget');
        yield "
        </div>
        <span class=\"I\"></span>
        <div class=\"N\">
            <span>Nivel</span>
            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "OrigenNivel5", [], "any", false, false, false, 87), 'widget');
        yield "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"C\">
            
        </div>
        <span class=\"E\"></span>
        <div class=\"A\"><br>
            ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "Enviar", [], "any", false, false, false, 96), 'row');
        yield "
        </div>
    </div>
 ";
        // line 99
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
        return "solicitudes/habilidades_subclase.html.twig";
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
        return array (  206 => 99,  200 => 96,  188 => 87,  180 => 82,  172 => 77,  163 => 71,  155 => 66,  147 => 61,  138 => 55,  130 => 50,  122 => 45,  113 => 39,  105 => 34,  97 => 29,  88 => 23,  80 => 18,  72 => 13,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "solicitudes/habilidades_subclase.html.twig", "C:\\Users\\alopa\\OneDrive\\Escritorio\\xampp2\\htdocs\\Symfony\\TFG\\templates\\solicitudes\\habilidades_subclase.html.twig");
    }
}
