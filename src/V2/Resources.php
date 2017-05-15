<?php

namespace Varspool\JobAdder\V2;

use Joli\Jane\OpenApi\Runtime\Client\Resource;
use Varspool\JobAdder\V2\Resource\CandidateFloatsResource;
use Varspool\JobAdder\V2\Resource\CandidatesResource;
use Varspool\JobAdder\V2\Resource\CandidateSubmissionsResource;
use Varspool\JobAdder\V2\Resource\CategoriesResource;
use Varspool\JobAdder\V2\Resource\ContactsResource;
use Varspool\JobAdder\V2\Resource\IndexResource;
use Varspool\JobAdder\V2\Resource\JobAdsResource;
use Varspool\JobAdder\V2\Resource\JobApplicationsResource;
use Varspool\JobAdder\V2\Resource\JobsResource;
use Varspool\JobAdder\V2\Resource\NotesResource;
use Varspool\JobAdder\V2\Resource\PlacementsResource;
use Varspool\JobAdder\V2\Resource\RequisitionsResource;
use Varspool\JobAdder\V2\Resource\UserGroupsResource;
use Varspool\JobAdder\V2\Resource\UsersResource;

abstract class Resources extends Resource
{
    /**
     * @var CandidatesResource
     */
    protected $candidates;

    /**
     * @var CandidateFloatsResource
     */
    protected $candidateFloats;

    /**
     * @var CandidateSubmissionsResource
     */
    protected $candidateSubmissions;

    /**
     * @var CategoriesResource
     */
    protected $categories;

    /**
     * @var ContactsResource
     */
    protected $contacts;

    /**
     * @var IndexResource
     */
    protected $index;

    /**
     * @var JobAdsResource
     */
    protected $jobAds;

    /**
     * @var JobApplicationsResource
     */
    protected $jobApplications;

    /**
     * @var JobsResource
     */
    protected $jobs;

    /**
     * @var NotesResource
     */
    protected $notes;

    /**
     * @var PlacementsResource
     */
    protected $placements;

    /**
     * @var RequisitionsResource
     */
    protected $requisitions;

    /**
     * @var UserGroupsResource
     */
    protected $userGroups;

    /**
     * @var UsersResource
     */
    protected $users;

    /**
     * @return CandidateFloatsResource
     */
    public function candidateFloats(): CandidateFloatsResource
    {
        if (null === $this->candidateFloats) {
            $this->candidateFloats = $this->createResourceInstance(CandidateFloatsResource::class);
        }

        return $this->candidateFloats;
    }

    /**
     * @return CandidateSubmissionsResource
     */
    public function candidateSubmissions(): CandidateSubmissionsResource
    {
        if (null === $this->candidateSubmissions) {
            $this->candidateSubmissions = $this->createResourceInstance(CandidateSubmissionsResource::class);
        }

        return $this->candidateSubmissions;
    }

    /**
     * @return CategoriesResource
     */
    public function categories(): CategoriesResource
    {
        if (null === $this->categories) {
            $this->categories = $this->createResourceInstance(CategoriesResource::class);
        }

        return $this->categories;
    }

    /**
     * @return ContactsResource
     */
    public function contacts(): ContactsResource
    {
        if (null === $this->contacts) {
            $this->contacts = $this->createResourceInstance(ContactsResource::class);
        }

        return $this->contacts;
    }

    /**
     * @return IndexResource
     */
    public function index(): IndexResource
    {
        if (null === $this->index) {
            $this->index = $this->createResourceInstance(IndexResource::class);
        }

        return $this->index;
    }

    /**
     * @return JobAdsResource
     */
    public function jobAds(): JobAdsResource
    {
        if (null === $this->jobAds) {
            $this->jobAds = $this->createResourceInstance(JobAdsResource::class);
        }

        return $this->jobAds;
    }

    /**
     * @return JobApplicationsResource
     */
    public function jobApplications(): JobApplicationsResource
    {
        if (null === $this->jobApplications) {
            $this->jobApplications = $this->createResourceInstance(JobApplicationsResource::class);
        }

        return $this->jobApplications;
    }

    /**
     * @return JobsResource
     */
    public function jobs(): JobsResource
    {
        if (null === $this->jobs) {
            $this->jobs = $this->createResourceInstance(JobsResource::class);
        }

        return $this->jobs;
    }

    /**
     * @return NotesResource
     */
    public function notes(): NotesResource
    {
        if (null === $this->notes) {
            $this->notes = $this->createResourceInstance(NotesResource::class);
        }

        return $this->notes;
    }

    /**
     * @return PlacementsResource
     */
    public function placements(): PlacementsResource
    {
        if (null === $this->placements) {
            $this->placements = $this->createResourceInstance(PlacementsResource::class);
        }

        return $this->placements;
    }

    /**
     * @return RequisitionsResource
     */
    public function requisitions(): RequisitionsResource
    {
        if (null === $this->requisitions) {
            $this->requisitions = $this->createResourceInstance(RequisitionsResource::class);
        }

        return $this->requisitions;
    }

    /**
     * @return UserGroupsResource
     */
    public function userGroups(): UserGroupsResource
    {
        if (null === $this->userGroups) {
            $this->userGroups = $this->createResourceInstance(UserGroupsResource::class);
        }

        return $this->userGroups;
    }

    /**
     * @return UsersResource
     */
    public function users(): UsersResource
    {
        if (null === $this->users) {
            $this->users = $this->createResourceInstance(UsersResource::class);
        }

        return $this->users;
    }

    /**
     * @return CandidatesResource
     */
    public function candidates(): CandidatesResource
    {
        if (null === $this->candidates) {
            $this->candidates = $this->createResourceInstance(CandidatesResource::class);
        }

        return $this->candidates;
    }

    /**
     * Creates an instance of the specified resource type
     *
     * @param string $type
     * @return Resource
     */
    protected function createResourceInstance(string $type): Resource
    {
        return new $type($this->httpClient, $this->messageFactory, $this->serializer);
    }
}
