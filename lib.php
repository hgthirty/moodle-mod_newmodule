<?php  // $Id$
/**
 * Library of functions and constants for module NEWMODULE
 *
 * @author 
 * @version $Id$
 * @package NEWMODULE
 **/

/// (replace NEWMODULE with the name of your module and delete this line)


$NEWMODULE_CONSTANT = 7;     /// for example

/**
 * Given an object containing all the necessary data, 
 * (defined by the form in mod.html) this function 
 * will create a new instance and return the id number 
 * of the new instance.
 *
 * @param object $instance An object from the form in mod.html
 * @return int The id of the newly inserted NEWMODULE record
 **/
function NEWMODULE_add_instance($NEWMODULE) {
    
    $NEWMODULE->timemodified = time();

    # May have to add extra stuff in here #
    
    return insert_record("NEWMODULE", $NEWMODULE);
}

/**
 * Given an object containing all the necessary data, 
 * (defined by the form in mod.html) this function 
 * will update an existing instance with new data.
 *
 * @param object $instance An object from the form in mod.html
 * @return boolean Success/Fail
 **/
function NEWMODULE_update_instance($NEWMODULE) {

    $NEWMODULE->timemodified = time();
    $NEWMODULE->id = $NEWMODULE->instance;

    # May have to add extra stuff in here #

    return update_record("NEWMODULE", $NEWMODULE);
}

/**
 * Given an ID of an instance of this module, 
 * this function will permanently delete the instance 
 * and any data that depends on it. 
 *
 * @param int $id Id of the module instance
 * @return boolean Success/Failure
 **/
function NEWMODULE_delete_instance($id) {

    if (! $NEWMODULE = get_record("NEWMODULE", "id", "$id")) {
        return false;
    }

    $result = true;

    # Delete any dependent records here #

    if (! delete_records("NEWMODULE", "id", "$NEWMODULE->id")) {
        $result = false;
    }

    return $result;
}

/**
 * Return a small object with summary information about what a 
 * user has done with a given particular instance of this module
 * Used for user activity reports.
 * $return->time = the time they did it
 * $return->info = a short text description
 *
 * @return null
 * @todo Finish documenting this function
 **/
function NEWMODULE_user_outline($course, $user, $mod, $NEWMODULE) {
    return $return;
}

/**
 * Print a detailed representation of what a user has done with 
 * a given particular instance of this module, for user activity reports.
 *
 * @return boolean
 * @todo Finish documenting this function
 **/
function NEWMODULE_user_complete($course, $user, $mod, $NEWMODULE) {
    return true;
}

/**
 * Given a course and a time, this module should find recent activity 
 * that has occurred in NEWMODULE activities and print it out. 
 * Return true if there was output, or false is there was none. 
 *
 * @uses $CFG
 * @return boolean
 * @todo Finish documenting this function
 **/
function NEWMODULE_print_recent_activity($course, $isteacher, $timestart) {
    global $CFG;

    return false;  //  True if anything was printed, otherwise false 
}

/**
 * Function to be run periodically according to the moodle cron
 * This function searches for things that need to be done, such 
 * as sending out mail, toggling flags etc ... 
 *
 * @uses $CFG
 * @return boolean
 * @todo Finish documenting this function
 **/
function NEWMODULE_cron () {
    global $CFG;

    return true;
}

/**
 * Must return an array of grades for a given instance of this module, 
 * indexed by user.  It also returns a maximum allowed grade.
 * 
 * Example:
 *    $return->grades = array of grades;
 *    $return->maxgrade = maximum allowed grade;
 *
 *    return $return;
 *
 * @param int $NEWMODULEid ID of an instance of this module
 * @return mixed Null or object with an array of grades and with the maximum grade
 **/
function NEWMODULE_grades($NEWMODULEid) {
   return NULL;
}

/**
 * Must return an array of user records (all data) who are participants
 * for a given instance of NEWMODULE. Must include every user involved
 * in the instance, independient of his role (student, teacher, admin...)
 * See other modules as example.
 *
 * @param int $NEWMODULEid ID of an instance of this module
 * @return mixed boolean/array of students
 **/
function NEWMODULE_get_participants($NEWMODULEid) {
    return false;
}

/**
 * This function returns if a scale is being used by one NEWMODULE
 * it it has support for grading and scales. Commented code should be
 * modified if necessary. See forum, glossary or journal modules
 * as reference.
 *
 * @param int $NEWMODULEid ID of an instance of this module
 * @return mixed
 * @todo Finish documenting this function
 **/
function NEWMODULE_scale_used ($NEWMODULEid,$scaleid) {
    $return = false;

    //$rec = get_record("NEWMODULE","id","$NEWMODULEid","scale","-$scaleid");
    //
    //if (!empty($rec)  && !empty($scaleid)) {
    //    $return = true;
    //}
   
    return $return;
}

//////////////////////////////////////////////////////////////////////////////////////
/// Any other NEWMODULE functions go here.  Each of them must have a name that 
/// starts with NEWMODULE_


?>
