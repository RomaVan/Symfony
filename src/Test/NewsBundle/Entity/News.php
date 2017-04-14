<?php
namespace Test\NewsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Test\NewsBundle\Entity\News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity
 */
class News
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var text $announce
     *
     * @ORM\Column(name="announce", type="text", nullable=true)
     */
    private $announce;

    /**
     * @var text $text
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var date $pubDate
     *
     * @ORM\Column(name="pub_date", type="date", nullable=true)
     */
    private $pubDate;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return text
     */
    public function getAnnounce()
    {
        return $this->announce;
    }

    /**
     * @param text $announce
     */
    public function setAnnounce($announce)
    {
        $this->announce = $announce;
    }

    /**
     * @return text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param text $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return date
     */
    public function getPubDate()
    {
        return $this->pubDate;
    }

    /**
     * @param date $pubDate
     */
    public function setPubDate($pubDate)
    {
        $this->pubDate = $pubDate;
    }

}