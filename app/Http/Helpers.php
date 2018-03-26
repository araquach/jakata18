<?php



/**
 * Display the contact status in recruitment
 *
 * @param
 * @return
 */
 
function getContactStatus($value)
{
    switch($value) {
        case 1:
            return "Not Contacted";
            break;
        case 2:
            return "Left Message";
            break;
        case 3:
            return "Spoke Direct";
            break;
        case 4:
            return "Interviewed - good";
            break;
        case 5:
            return "Interviewed - bad";
            break;
        default:
            return "Needs Sorting";
    }
}
    
/**
 * Display the quality of candidate in recruitment
 *
 * @param
 * @return
 */
    
function getQuality($value)
{
    switch($value) {
        case 1:
            return "We need them!";
            break;
        case 2:
            return "Has Potential";
            break;
        case 3:
            return "Put on backburner";
            break;
        case 4:
            return "Discard";
            break;
        default:
            return "Not Rated";
    }
}

/**
 * Adds html tags for blog feed
 *
 * @param
 * @return
 */

function addTag($string)
{
    if(starts_with($string, '*H1'))
    {
        $string = str_replace('*H1', '', $string);
        
        return '<h3>' . $string . '</h3>';
    }
    if(starts_with($string, '*LNK'))
    {
        $string = str_replace('*LNK', '', $string);
        
        return '<p>' . $string . '</p>';
    }
    if(starts_with($string, '*BLD'))
    {
        $string = str_replace('*BLD', '', $string);
        
        return '<p><strong>' . $string . '</strong></p>';
    }
    if(starts_with($string, '*IMG'))
    {
        $string = str_replace('*IMG', '', $string);
        
        return '<img src="' . $string . '" class="large-image" width="50%" height="50%">';
    }
    else {
        return '<p>' . $string . '</p>';
    }
}

function limit_words($string)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,40));
}

function limit_news_words($string)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,20));
}

function remove_client($string)
{
    $string = str_replace('Client: ', '', $string);
    
    return $string;
}

function remove_staff($string)
{
    $string = str_replace('Staff: ', '', $string);
    
    return $string;
}