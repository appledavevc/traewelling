<?php

namespace App\Virtual\Models;


/**
 * @OA\Schema(
 *     title="User",
 *     description="User model",
 *     @OA\Xml(
 *         name="User"
 *     )
 * )
 */
class User
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="ID",
     *     format="int",
     *     example=1
     * )
     *
     * @var integer
     **/
    private $id;

    /**
     * @OA\Property(
     *     title="displayName",
     *     description="Display name of the user",
     *     example="Gertrud"
     * )
     *
     * @var string;
     */
    public $displayName;

    /**
     * @OA\Property (
     *     title="username",
     *     description="username of user",
     *     example="Gertrud123"
     * )
     *
     * @var string
     */
    private $username;

    /**
     * @OA\Property(
     *     title="profilePicture",
     *     description="URL of the profile picture of the user",
     *     example="https://traewelling.de/@Gertrud123/picture"
     * )
     *
     * @var integer
     */
    private $profilePicture;

    /**
     * @OA\Property(
     *     title="trainDistance",
     *     description="distance travelled by train in meters",
     *     format="int",
     *     example=12345
     * )
     *
     * @var integer
     */
    private $trainDistance;

    /**
     * @OA\Property(
     *     title="trainDuration",
     *     description="duration travelled by train in minutes",
     *     format="int",
     *     example=6
     * )
     *
     * @var integer
     */
    private $trainDuration;

    /**
     * @OA\Property(
     *     title="points",
     *     description="Current points of the last 7 days",
     *     format="int",
     *     example=300
     * )
     *
     * @var integer
     */
    private $points;

    /**
     * @OA\Property (
     *     title="mastodonUrl",
     *     description="URL to the Mastodon profile of the user",
     *     nullable=true,
     *     example="https://chaos.social/@traewelling"
     * )
     *
     * @var string
     */
    private $mastodonUrl;

    /**
     * @OA\Property (
     *     title="privateProfile",
     *     description="is this profile set to private?",
     *     type="boolean",
     *     example=false
     * )
     *
     * @var bool
     */
    private $privateProfile;

    /**
     * @OA\Property (
     *     title="likes_enabled",
     *     description="Does this profile allow likes? Only offer the UI to like any status if this setting is set to true. If set to false, the likes API will return 403.",
     *     type="boolean",
     *     example=true
     * )
     *
     * @var bool
     */
    private $likes_enabled;

    /**
     * @OA\Property (
     *     title="pointsEnabled",
     *     description="Does this profile allow points? Only offer the UI to show points at any status if this setting is set to true. If set to false, the points will always be displayed as 0",
     *     type="boolean",
     *     example=true
     * )
     */

    /**
     * @OA\Property (
     *     title="userInvisibleToMe",
     *     description="Can the currently authenticated user see the statuses of this user?",
     *     type="boolean",
     *     example=false
     * )
     *
     * @var bool
     */
    private $userInvisibleToMe;

    /**
     * @OA\Property (
     *     title="muted",
     *     description="Is this user muted by the currently authenticated user?",
     *     type="boolean",
     *     example=false
     * )
     *
     * @var bool
     */
    private $muted;

    /**
     * @OA\Property (
     *     title="following",
     *     description="Does the currently authenticated user follow this user?",
     *     type="boolean",
     *     example=false
     * )
     *
     * @var bool
     */
    private $following;

    /**
     * @OA\Property (
     *     title="followPending",
     *     description="Is there a currently pending follow request?",
     *     type="boolean",
     *     example=false
     * )
     *
     * @var bool
     */
    private $followPending;

    /**
     * @OA\Property (
     *     title="followedBy",
     *     description="Is the user following you?",
     *     type="boolean",
     *     example=false
     * )
     *
     * @var bool
     */
    private $followedBy;

    /**
     * @OA\Property (
     *     title="preventIndex",
     *     description="Did the user choose to prevent search engines from indexing their profile?",
     *     type="boolean",
     *     example=false
     * )
     *
     * @var bool
     */
    private $preventIndex;

}
